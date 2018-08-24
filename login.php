<html lang="pt-br">
  <head>
    <title>Mini-Twitter</title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  </head>
  <body>
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

    <h2>Login</h2>
    <p>Utilize seu nome de usuário e senha para se conectar.</p>
    <form action="processa-login.php" method="post">
      <input type="text" id="username" name="username" size="40" placeholder="Nome de usuário" required><br><br>
      <input type="password" id="password" name="password" size="40" placeholder="Senha" required><br><br>
      <input type="submit" id="submit" size="40" value="Logar"> <input type="button" id="button" href="lembrarsenha.php" value="Esqueci A Senha"> </button><br><br>
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
