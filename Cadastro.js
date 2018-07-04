function contaCharNome(){
  var totalchar = 50 - document.getElementById("nomeCompleto").value.length;
  if (totalchar < 0){
    totalchar--;
  }
  document.getElementById("qntCharNome").innerHTML="Caracteres restantes:"+ totalchar + "/50";
}

function contaCharUsername(){
  var totalchar = 25 - document.getElementById("user").value.length;
  if (totalchar < 0){
    totalchar--;
  }
  document.getElementById("qntCharUsername").innerHTML="Caracteres restantes:"+ totalchar + "/25";
}

function contaCharEmail(){
  var totalchar = 25 - document.getElementById("email").value.length;
  if (totalchar < 0){
    totalchar--;
  }
  document.getElementById("qntCharEmail").innerHTML="Caracteres restantes:"+ totalchar + "/25";
}
