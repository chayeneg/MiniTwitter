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
  <h1>Mini-Twitter</h1>
  <h2>Perfil</h2>
    <?php
      $sql = "SELECT * FROM users WHERE username = '$username'";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)){
        echo "<table id='tabela_infos' style='width:100%'>";
        echo "<tr>Informações</tr><br>";
        echo "<tr>Nome completo: " . $row["name"] . "</tr><br>";
        echo "<tr>Nome de usuário: " . $row["username"] . "</tr><br>";
        echo "<tr>Email: " . $row["email"] . "</tr><br>";
        echo "<tr>Data de nascimento: " . $row["birthDate"] . "</tr><br>";
        echo "<tr>Sexo: " . $row["sex"] . "</tr><br>";
        echo "<tr>Cidade: " . $row["city"] . "</tr><br>";
        echo "<tr>Site: " . $row["website"] . "</tr><br>";
        echo "</table>";
      }
    ?>

    <p>Se você desejar é possível alterar suas informações.</p>
    <input type="button" id="button" value="Alterar" onclick="location.href='alteracao.php'">
  </form>
</body>
</html>
