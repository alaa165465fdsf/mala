function cn(){
a=document.getElementById("nom").value;
b=document.getElementById("password").value;
if(a.length>10 || a.length<2){
    alert("votre nom doivent etre compris entre 2 et 10 ")
    document.getElementById("nom").style.backgroundColor="red"
}
else{
    alert("bara seyes rou7ik")
     document.getElementById("nom").style.backgroundColor="green"
}
}