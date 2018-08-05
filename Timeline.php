<?php

require_once("check_user.php")
?>
<html lang="pt-br">
<head>
<title>Mini Twitter</title>
<head>
  <link rel="stylesheet" type="text/css" href="css/Timeline.css">

  <script src="timeline.js"></script>
</head>
<body>
  <form action="enviaTimeline.php" method="post">

<div class="caixa">
  <div class="conteudo">
  <h1> Mini Twitter </h1>
  
  <p> Escreva alguma coisa: </p>
  <textarea name="mensagem" maxlength="140" rows="4"  cols="50" onkeyup="contar(140)" ></textarea>
</br>
<h>Caracteres digitados: </h><span id="numero">140</span>
</br></br></br>

<input type="submit" name="twettar" value="Twettar">
</br>
</form>
  <h2> Mensagens </h2>
  <p id="demo"></p>
</div>

</div>
</body>
</html>
