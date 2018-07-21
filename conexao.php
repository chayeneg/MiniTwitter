<?php

$con = mysql_connect("localhost", "root", "");
$db = mysql_select_db("cadastro", $con);

if(!$con){
  die()"não foi possivel conectar ao banco de dados; " . mysql_error());
}

mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_cliente=utf9');
mysql_query('SET character_set_results=utf8');

 ?>
