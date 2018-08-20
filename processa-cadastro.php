<?php
  require_once('conexao.php');

  $name = $_POST['name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmation = $_POST['confirmation'];
  $date = $_POST['date'];
  $sex = $_POST['sex'];
  $city = $_POST['city'];
  $website = $_POST['website'];

  $query_select_user = "SELECT username FROM users WHERE username = '$username'";
  $select_user = mysqli_query($conn, $query_select_user);
  $resultado_user = $select_user->fetch_assoc();

  $query_select_email = "SELECT email FROM users WHERE email = '$email'";
  $select_email = mysqli_query($conn, $query_select_email);
  $resultado_email = $select_email->fetch_assoc();

  if($username==$resultado_user["username"]){
    echo "<script language'javascript' type='text/javascript'>alert('O usuário já está cadastrado!');window.location.href='cadastro.php';</script>";
  }
  else if($email==$resultado_email["email"]){
    echo "<script language'javascript' type='text/javascript'>alert('O email já foi utilizado!');window.location.href='cadastro.php';</script>";
  }
  else if (strcmp($confirmation, $password)!=0){
    echo "<script language'javascript' type='text/javascript'>alert('As senhas não conferem!');window.location.href='cadastro.php';</script>";
  }
  else {
    $stmt = $conn->prepare("INSERT INTO users (name, username, email, password, birthDate, sex, city, website) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $name, $username, $email, $password, $date, $sex, $city, $website);
    if ($stmt->execute()){
      echo "<script language'javascript' type='text/javascript'>alert('Cadastro efetuado!');window.location.href='index.php';</script>";
    } else {
      echo "<script language'javascript' type='text/javascript'>alert('Erro no banco de dados!');window.location.href='cadastro.php';</script>";
    }
  }
  if(!empty($name) && !empty($username) && !empty($email) && !empty($password) && !empty($confirmation) && !empty($date) && !empty($sex) && !empty($city));
?>
