<?php require_once("check_user.php") ?>
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
          ola <?php echo $auth_username; ?>
          <textarea maxlength="140" id="caixatexto" onkeyup="conta(140)" placeholder="O que esta acontecendo?"></textarea>
            <p id="total">Caracteres restantes:140 </p>
            <input type="button" value="Tweetar" onclick="envia()"></input>
    </br>
  </form>
  <h2> Mensagens </h2>
  <p id="demo"></p>
</div>

</div>
</body>
</html>
