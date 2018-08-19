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

   if (strcmp($confirmation, $password)!=0){
       echo "<script language'javascript' type='text/javascript'>alert('As senhas não conferem!');window.location.href='cadastro.php';</script>";
   } else {
      $stmt = $conn->prepare("INSERT INTO users (name, username, email, password, birthDate, sex, city, website) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("ssssssss", $name, $username, $email, $password, $date, $sex, $city, $website);
      if ($stmt->execute()){
             echo "<script language'javascript' type='text/javascript'>alert('Cadastro efetuado!');window.location.href='index.php';</script>";
      } else {
          echo "<script language'javascript' type='text/javascript'>alert('Erro no banco de dados!');window.location.href='cadastro.php';</script>";
      }
   }
?>
