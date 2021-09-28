const form = document.querySelector(".typing-area"),
inputfield= form.querySelector(".input-field"),
sendbtn= form.querySelector("button"),
chatbox =document.querySelector(".chat-box");


form.onsubmit = (e)=>{
    e.preventDefault();
}


sendbtn.onclick = ()=>{
    let xhr =new XMLHttpRequest();
    xhr.open("POST","php/insert_chat.php",true);
    xhr.onload =()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                inputfield.value = "";
                scrollBottom();
            }
        }

    }
    let formData =new FormData(form);
    xhr.send(formData);
}
chatbox.onmouseenter = ()=>{
    chatbox.classList.add("active");
}
chatbox.onmouseleave = ()=>{
    chatbox.classList.remove("active");
}


setInterval(()=>{

    let xhr =new XMLHttpRequest();
    xhr.open("POST","php/get_chat.php",true);
    xhr.onload =()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data =xhr.response;
                chatbox.innerHTML=data;
                if(!chatbox.classList.contains("active")){
                    scrollBottom();
                }
                
            }
        }
    }
    let formData =new FormData(form);
    xhr.send(formData);
}, 500);


function scrollBottom(){
    chatbox.scrollTop=chatbox.scrollHeight;
}