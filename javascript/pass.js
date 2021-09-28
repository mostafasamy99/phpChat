const passfiled= document.querySelector(".form input[type='password']"),
togglebtn= document.querySelector(".form .field i");

togglebtn.onclick = ()=>{
    if(passfiled.type=="password"){
        passfiled.type ="text";
        togglebtn.classList.add("active");
    }
    else{
        passfiled.type="password";
        togglebtn.classList.remove("active");
    }
}
