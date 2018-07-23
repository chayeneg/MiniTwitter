<html>

<head>
<title>Testando</title>
</head>
<?php
  $host = "localhost";
  $user = "root";
  $pass = "123";
  $banco = "minitwitter";
  $conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
  mysql_select_db($banco) or die(mysql_error());
  $nome=$_POST['nome'];
  $sql = mysql_query("INSERT INTO teste (nome) VALUES ('$nome')");
  echo "Cadastro efetuado!";
?>
</body>

</html>
