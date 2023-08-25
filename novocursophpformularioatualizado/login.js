function validalogin(){
var login = "admin";
var senha = "senha";
if(login === document.forms["validalogin"]["login"].value&&
pass === document.forms["validalogin"]["senha"].valie){
alert("Login Válido");
return true;
}else {
    alert("login inválido");
    return false;
}
}