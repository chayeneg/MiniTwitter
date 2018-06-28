function contaCharNome(){
  var totalchar = 50 - document.getElementById("nomeCompleto").value.length;
  if (totalchar < 0){
    totalchar--;
  }
  document.getElementById("qntCharNome").innerHTML="Caracteres restantes:"+ totalchar + "/50";
}
