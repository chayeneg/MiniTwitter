function conta(tam){
  var totalchar = tam - document.getElementById("caixatexto").value.length;
  if (totalchar < 0){
    totalchar--;
  }
  document.getElementById("total").innerHTML="Caracteres restantes:"+ totalchar;
}

function envia(){
  totalchar = 140;
  document.getElementById("total").innerHTML="Caracteres restantes:"+ totalchar;
  document.getElementById("caixatexto").value="";
}
