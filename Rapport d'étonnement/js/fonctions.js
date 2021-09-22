function check(){
  document.getElementById("nom").required = false;
  document.getElementById("prenom").required = false;
  if(document.getElementById("oui").checked == true){
    document.getElementById("nomPrenom").style.display = "none";
    document.getElementById("particles-js").style.height= "1880px";
    document.getElementById("nom").required = false;
    document.getElementById("prenom").required = false;
    document.getElementById("onOff").innerHTML = "&nbsp; On";
  }
  else{
    document.getElementById("nomPrenom").style.display = "block";
    document.getElementById("particles-js").style.height= "2000px";
    document.getElementById("nom").required = true;
    document.getElementById("prenom").required = true;
    document.getElementById("onOff").innerHTML = "&nbsp; Off";
    
  }
}


