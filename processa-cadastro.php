<?php
  require_once('conexao.php');

   $name = $_POST['name'];
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $confirmation = $_POST['confirm-password'];
   $date = $_POST['date'];
   $sex = $_POST['sex'];
   $city = $_POST['city'];
   $website = $_POST['website'];

   if (strcmp($confirmation, $password)!=0){
      session_start();
      $_SESSION['error'] = "As senhas não conferem!";
      $_SESSION['name'] = $name;
      $_SESSION['username'] = $username;
      $_SESSION['email'] = $email;
      $_SESSION['date'] = $date;
      $_SESSION['sex'] = $sex;
      $_SESSION['city'] = $city;
      $_SESSION['website'] = $website;
      header("Location: cadastro.php");
   } else {
      //validar senha e confirmação
      $stmt = $conn->prepare("INSERT INTO users (name, username, email, password) VALUES (?, ?, ?, ?)");
      $stmt->bind_param("ssss", $name, $username, $email, $password );
      if ($stmt->execute()){
         header("Location: index.php");
      } else {
         session_start();
         $_SESSION['error'] = "erro no banco de dados";
         header("Location: new.php");
      }
   }
?>
