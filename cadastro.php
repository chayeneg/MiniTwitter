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
      <input type="text" id="name" name="name" size="40" maxlength="100" placeholder="Nome completo" required> *<br><br>
      <input type="text" id="username" name="username" size="40" maxlength="50" placeholder="Nome de usuário" required> *<br><br>
      <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"0 size="40" maxlength="60" placeholder="Email" required> *<br><br>
      <input type="password" id="password" name="password" pattern="^.{8,16}$" size="40" maxlength="16" placeholder="Senha: mínimo de 8 caracteres" required> *<br><br>
      <input type="password" id="confirmation" name="confirmation" pattern="^.{8,16}$" size="40" maxlength="16" placeholder="Confirma Senha: Mínimo de 8 caracteres" required> *<br><br>
      <input type="date" id="date" name="date" size="40" required> *
      <select id="sex" name="sex" required>
        <option value="masculino" selected>Masculino</option>
        <option value="feminino">Feminino</option>
        <option value="outro">Outro</option>
      </select> *<br><br>
      <input type="text" id="city" name="city" size="40" maxlength="30" placeholder="Cidade" required> *<br><br>
      <input type="text" id="website" name="website" size="40" maxlength="50" placeholder="Site"><br><br>
      <input type="submit" id="submit" size="40" value="Cadastrar"><br><br>
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
