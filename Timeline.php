<?php

require_once("check_user.php")

?>
<html lang="pt-br">
<head>
<title>Mini Twitter</title>
<head>
  <link rel="stylesheet" type="text/css" href="Timeline.css">

  <script src="timeline.js"></script>
</head>
<body>
<div class="caixa">
  <div class="conteudo">
  <h1> Mini Twitter </h1>
  <p> Escreva alguma coisa: </p>
  <textarea id="mensagem" maxlength="140" rows="4"  cols="50" onkeyup="contar(140)" ></textarea>
</br>
<h>Caracteres digitados: </h><span id="numero">140</span>
</br></br></br>

  <button type="button" onclick="postar(140)"> Postar </button>
</br>
  <h2> Mensagens </h2>
  <p id="demo"></p>
</div>

</div>
</body>
</html>
