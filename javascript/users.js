userslist= document.querySelector(".users .users-list");
setInterval(()=>{

    let xhr =new XMLHttpRequest();
    xhr.open("GET","php/users.php",true);
    xhr.onload =()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data =xhr.response;
                userslist.innerHTML=data;
            }
        }
    }
    xhr.send();
}, 500)