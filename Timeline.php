<?php

require_once("check_user.php")

?>

<html lang="pt-br">
<head>
<title>Mini Twitter</title>
<head>
  <link rel="stylesheet" type="text/css" href="css/Timeline.css">

  <script src="javascript/timeline.js"></script>
</head>
<body>
  <form action="enviaTimeline.php" method="post">

<div class="caixa">
  <div class="conteudo">
  <h1> Mini Twitter </h1>
  <strong>
  Olá <?php

  $str = "$auth_username";
  $str = strtoupper($str);
  print $str;?>
</strong>
  <p> Escreva alguma coisa: </p>
  <textarea id="mensagem" name="mensagem" maxlength="140" rows="4"  cols="50" onkeyup="conta(140)" ></textarea>
</br>
<p id="total">Caracteres restantes: 140</p>

</br></br></br>
<input type="submit" name="twettar" value="Twettar">
</br>
</form>
  <h2> Mensagens </h2>

  <?

  ?>

  <p id="demo"></p>
</div>

</div>
</body>
</html>
