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
      </ul><br><br>
    </div>
    <div class="sidebar"><fieldset>
      <h1>Perfil</h1>
    <?php
      $sql = "SELECT * FROM users WHERE username = '$username'";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)){
        echo "<table id='tabela_infos' style='width:100%'>";
        echo "<tr><strong>Nome completo:</strong> " . $row["name"] . "</tr><br>";
        echo "<tr><strong>Nome de usuário:</strong> @" . $row["username"] . "</tr><br>";
        echo "<tr><strong>Email:</strong> " . $row["email"] . "</tr><br>";
        echo "<tr><strong>Data de nascimento:</strong> " . $row["birthDate"] . "</tr><br>";
        echo "<tr><strong>Sexo:</strong> " . $row["sex"] . "</tr><br>";
        echo "<tr><strong>Cidade: </strong>" . $row["city"] . "</tr><br>";
        echo "<tr><strong>Site:</strong> " . $row["website"] . "</tr><br>";
        echo "</table>";
      }
    ?>
  </fieldset>
  			</div>
            <fieldset>
              <div class="content"><br><br>
                <div class="content-inner">
                  <h2> O que você está pensando?</h2>
  <form action="processa-timeline.php" method="post">
      <br>
    <textarea class="post" id="new_message" name="new_message" placeholder=" Digite aqui a sua mensagem! " rows="5" cols="40" onkeyup="conta(140)" maxlength="140"></textarea>
    <p id="char_count" name="char_count"> 140 caracteres restantes </p>
    <input type="submit" id="btn-submit" value="Twettar"><br><br>
  </form>
    <h2> Veja o que estão falando </h2>
      <?php
        $sql = "SELECT users.name, users.username, tweets.date, tweets.message, tweets.id as id FROM users INNER JOIN tweets ON users.id = tweets.user_id ORDER BY tweets.date DESC";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)>0){
          while($row = mysqli_fetch_assoc($result)){
            echo $row["name"] . " - " . $row["date"] . "<br>";
            echo "@" . $row["username"]  . "<br>";
            echo $row["message"] . "<br><br>" ;
            if($username==$row["username"]){
                $_SESSION['tweets_id'] = $row["id"];
            ?>
                <button  id="button" click="location.href='deleta.php'">Excluir</button><br>
            <?php
            }
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
