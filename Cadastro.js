function contaCharNome(){
  var totalchar = 0 + document.getElementById("nomeCompleto").value.length;
  if (totalchar < 50){
    totalchar++;
  }
  document.getElementById("qntCharNome").innerHTML= totalchar + "/50";
}

function contaCharUsername(){
  var totalchar = 0 + document.getElementById("user").value.length;
  if (totalchar < 25){
    totalchar++;
  }
  document.getElementById("qntCharUsername").innerHTML= totalchar + "/25";
}

function contaCharEmail(){
  var totalchar = 0 + document.getElementById("email").value.length;
  if (totalchar < 40){
    totalchar++;
  }
  document.getElementById("qntCharEmail").innerHTML= totalchar + "/60";
}
