function conta(tam){
  var totalchar = tam - document.getElementById("new_message").value.length;
  if (totalchar < 0){
    totalchar--;
  }
  document.getElementById("char_count").innerHTML= totalchar + "caracteres restantes";
}

function envia(){
  totalchar = 140;
  document.getElementById("char_count").innerHTML= totalchar + "caracteres restantes:";
  document.getElementById("new_message").value="";
}
