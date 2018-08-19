<?php
require_once('verifica-usuario.php');
require_once('conexao.php');
$username = "$auth_username";
$name = "$auth_name";
?>

<html lang="pt-br">
<head>
  <title>Mini-Twitter</title>
  <script src="javascript/timeline.js"></script>
</head>
<body>
  <h1>Mini-Twitter</h1>
  <h2>Timeline</h2>
  <form action="processa-timeline.php" method="post">
    <fieldset id="login-box">
      <input type="button" id="profile-btn" value="Perfil" onclick="location.href='perfil.php'">
      <input type="button" id="profile-btn" value="Sair" onclick="location.href='logout.php'"><br>
      <?php
      echo $name . "<br>" . "@" . $username . "<br>";
      ?>
    </fieldset><br>
    <textarea class="post" id="new_message" name="new_message" placeholder="O que você está pensando?" rows="5" cols="40" onkeyup="conta(140)" maxlength="140"></textarea>
    <p id="char_count" name="char_count"> 140 caracteres restantes </p>
    <input type="submit" id="btn-submit" name="btn-submit" value="Twettar"><br><br>
  </form>
    <h2> Veja o que estão falando </h2>
    <fieldset>
      <?php
        $sql = "SELECT users.name, users.username, tweets.date, tweets.message FROM users INNER JOIN tweets ON users.id = tweets.user_id ORDER BY tweets.date DESC";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)>0){
          while($row = mysqli_fetch_assoc($result)){
            echo $row["name"] . " - " . $row["date"] . "<br>";
            echo "@" . $row["username"]  . "<br>";
            echo $row["message"] . "<br>" ;
            echo "<br>";
          }
        }
        else{
          echo "aida não existem mensagens postadas.";
        }
      ?>
    </fieldset>

</body>
</html>
