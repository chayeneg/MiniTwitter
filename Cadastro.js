function contaNome(){
  var totalchar = 50 - document.getElementsByName('nomeCompleto').value.lenght;
  document.getElementsByName('qntnome').innerHTML="Caracteres Restantes: " + totalchar;
}
