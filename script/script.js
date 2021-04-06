function validerFormulaire(){
    let email=document.getElementsByName("email")[0].value;
    let regex=/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if(email.length==0){
        let message=document.querySelector("#emailmessage");
        message.textContent="vous devez indiquer une adresse email";
        return false;
    }else if(!regex.test(email)){
        let message=document.querySelector("#emailmessage");
        message.textContent="vous devez indiquer une adresse email valide";
        return false;
    }
}