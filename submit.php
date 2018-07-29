<?php

define('INCLUDE_CHECK',1);
require "functions.php";
require "conexao.php";


if(ini_get('magic_quotes_gpc'))
$_POST['inputField']=stripslashes($_POST['inputField']);



$_POST['inputField'] = mysqli_real_escape_string($conn, strip_tags($_POST['inputField']),$link);

if(mb_strlen($_POST['inputField']) < 1 || mb_strlen($_POST['inputField'])>140)
die("0");

mysqli_query($conn, "INSERT INTO tweets SET message='".$_POST['inputField']."',date=NOW()");

if(mysqli_affected_rows($link)!=1)
die("0");

echo formatTweet($_POST['inputField'],time());

?>
