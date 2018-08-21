<?php
require_once('verifica-usuario.php');
require_once('conexao.php');
$username = "$auth_username";
$name = "$auth_name";
?>

<html lang="pt-br">
<head>
  <title>Mini-Twitter</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
  <body><body>
    <div class="main">
      <div class="titulo">
          <h1>Mini Twitter</h1>
      </div>
      <div id="menu">
				<ul>
					<li> <a href="index.php"> PÁGINA INICIAL </a> </li>
          <li> <a href="cadastro.php"> CADASTRAR </a> </li>
          <li> <a href="login.php"> LOGAR </a> </li>
				</ul>
			</div>

      <div class="content"><br><br>
              <fieldset>

        <div class="content-inner">
    <h2>Alteração de informações</h2>
    <p>Mude suas informações abaixo.</p>
    <form action="processa-alteracao.php" method="post">
      <input type="text" id="name" name="name" size="40" maxlength="100" placeholder="Seu nome completo" required><br><br>
      <input type="date" id="date" name="date" size="40" required><br><br>
      <select id="sex" name="sex"required>
        <option value="masculino" selected>Masculino</option>
        <option value="feminino">Feminino</option>
        <option value="outro">Outro</option>
      </select><br><br>
      <input type="text" id="city" name="city" size="40" maxlength="30" placeholder="Sua cidade"required><br><br>
      <input type="text" id="website" name="website" size="40" maxlength="50" placeholder="Seu site"><br><br>
      <input type="submit" id="submit" size="40" value="Alterar"required><br><br>
    </form>
  </div>
</div>

<br style="clear:both">
    </fieldset>
<div class="footer">
  Copyright©2018, Fayenel Company.
    <br>Todos os direitos reservados.
</div>
</div>
  </body>
</html>
