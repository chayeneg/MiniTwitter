function postar(tam){
  var post = document.getElementById("mensagem").value;
  document.getElementById("demo").innerHTML = post;
  valor = tam;
  document.getElementById("numero").innerHTML= valor;
  document.getElementById("mensagem").value="";
}

function contar(tam){
  var valor = tam - document.getElementById("mensagem").value.length;
  if (valor < 0){
    valor--;
  }
  document.getElementById("numero").innerHTML = valor;
}
