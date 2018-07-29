
<?php

define('INCLUDE_CHECK',1);
require "functions.php";
require "conexao.php";


// remove tweets older than 1 hour to prevent spam
// mysqli_query("DELETE FROM tweets WHERE id>1 AND dt<SUBTIME(NOW(),'0 1:0:0')");

//fetch the timeline
$q = mysqli_query($conn, "SELECT * FROM tweets ORDER BY id DESC");

$timeline='';
while($row=mysqli_fetch_assoc($q))
{
	$timeline.=formatTweet($row['message'],$row['date']);
}

// fetch the latest tweet
$lastTweet = '';
list($lastTweet) = mysqli_fetch_array(mysqli_query($conn,"SELECT message FROM tweets ORDER BY id DESC LIMIT 1"));

if(!$lastTweet) $lastTweet = "Você não tem tweets ainda!";

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Timeline</title>

<link rel="stylesheet" type="text/css" href="demo.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>


</head>

<body>

<div id="twitter-container">
<form id="tweetForm" action="submit.php" method="post">

<span class="counter">140</span>
<label for="inputField">Diga alguma coisa!</label>

<textarea name="inputField" id="inputField" tabindex="1" rows="2" cols="40"></textarea>
<input class="submitButton inact" name="submit" type="submit" value="update" disabled="disabled" />

<span class="latest"><strong>Ultimo: </strong><span id="lastTweet"><?=$lastTweet?></span></span>

<div class="clear"></div>

</form>

<h3 class="timeline">Timeline</h3>

<ul class="statuses"><?=$timeline?></ul>


</div>

</body>
</html>
