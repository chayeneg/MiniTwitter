<html lang="pt">
<head>
  <meta charset="UTF-8">
</head>
<body>
  <?

  session_start();

  if(isset($_session["numLogin"])){
    $n1=$_get["num1"];
    $n2=$_session["numLogin"];
    if ($n1 != $n2){
      echo "login nao efetuado";
      exit;
    }
    } else {
      echo "login nao efetuado";
      exit;
    }

    include "conexao.php";

    echo "Pagina inicial";
    echo "usuario: ".$_session['usuario']."<br>";

    msqli_close($conn);

  ?>
  <main>
  </main>
</body>
</html>
