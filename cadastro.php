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
    <h2>Cadastro</h2>
    <p>Os campos com * são obrigatórios.</p>
    <form action="processa-cadastro.php" method="post">
      <input type="text" id="name" name="name" size="40" placeholder="Seu nome completo" required> *<br><br>
      <input type="text" id="username" name="username" size="40" placeholder="Seu nome de usuário" required> *<br><br>
      <input type="email" id="email" name="email" size="40" placeholder="Seu email" required> *<br><br>
      <input type="password" id="password" name="password" size="40" placeholder="Sua senha: mínimo de 8 caracteres" required> *<br><br>
      <input type="password" id="confirmation" name="confirmation" size="40" placeholder="Confirme sua senha: Mínimo de 8 caracteres" required> *<br><br>
      <input type="date" id="date" name="date" size="40" required> *<br><br>
      <select id="sex" name="sex" required>
        <option value="masculino" selected>Masculino</option>
        <option value="feminino">Feminino</option>
        <option value="outro">Outro</option>
      </select> *<br><br>
      <input type="text" id="city" name="city" size="40" placeholder="Sua cidade" required> *<br><br>
      <input type="text" id="website"  name="website" size="40" placeholder="Seu site"><br><br>
      <input type="submit" id="submit" size="40" value="Enviar"><br><br>
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
