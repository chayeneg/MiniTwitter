<?php
require_once('verifica-usuario.php');
require_once('conexao.php');
$username = "$auth_username";
$name = "$auth_name";
?>

<html lang="pt-br">
<head>
  <head>
    <title>Mini-Twitter</title>
      <link rel="stylesheet" type="text/css" href="style-timeline.css">
      <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <script src="javascript/timeline.js"></script>
</head>
<body>
  <div class="main">
    <div class="titulo">
        <h1>Mini Twitter</h1>
    </div>
    <div id="menu">
      <ul>
        <li> <a onclick="location.href='index.php'"> PÁGINA INICIAL </a> </li>
        <li> <a onclick="location.href='cadastro.php'"> CADASTRAR </a> </li>
        <li> <a onclick="location.href='perfil.php'"> PERFIL </a> </li>
          <li> <a onclick="location.href='logout.php'"> SAIR  </a> </li>
      </ul>
    </div>

    <div class="content"><br><br>
            <fieldset>

      <div class="content-inner">
  <h2>Timeline</h2>
  <form action="processa-timeline.php" method="post">

      <?php
      echo $name . "<br>" . "@" . $username . "<br>";
      ?>
      <br>
    <textarea class="post" id="new_message" name="new_message" placeholder=" O que você está pensando?" rows="5" cols="40" onkeyup="conta(140)" maxlength="140"></textarea>
    <p id="char_count" name="char_count"> 140 caracteres restantes </p>
    <input type="submit" id="btn-submit" name="btn-submit" value="Twettar"><br><br>
  </form>
    <h2> Veja o que estão falando </h2>
      <?php
        $sql = "SELECT users.name, users.username, tweets.date, tweets.message FROM users INNER JOIN tweets ON users.id = tweets.user_id ORDER BY tweets.date DESC";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)>0){
          while($row = mysqli_fetch_assoc($result)){
            echo $row["name"] . " - " . $row["date"] . "<br>";
            echo "@" . $row["username"]  . "<br>";
            echo $row["message"] . "<br>" ;

            echo "____________________________________________________________";
            echo "<br>";
          }
        }
        else{
          echo " Ainda não existem mensagens postadas. ";
        }
      ?>
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
