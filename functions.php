<?php

if(!defined('INCLUDE_CHECK')) die('Você não tem permissão para acessar este link diretamente');

function relativeTime($date,$precision=2)
{
	$times=array(	365*24*60*60	=> "ano",
					30*24*60*60		=> "mês",
					7*24*60*60		=> "semana",
					24*60*60		=> "dia",
					60*60			=> "hora",
					60				=> "minutos",
					1				=> "segundos");

	$passed=time()-$date;

	if($passed<5)
	{
		$output='Menos de 5 minutos atras';
	}
	else
	{
		$output=array();
		$exit=0;

		foreach($times as $period=>$nome)
		{
			if($exit>=$precision || ($exit>0 && $period<60)) break;

			$result = floor($passed/$period);
			if($result>0)
			{
				$output[]=$result.' '.$nome.($result==1?'':'s');
				$passed-=$result*$period;
				$exit++;
			}
			else if($exit>0) $exit++;
		}

		$output=implode(' e ',$output).' atrás';
	}

	return $output;
}

function formatTweet($message,$date)
{
	if(is_string($date)) $date=strtotime($date);

	$tweet=htmlspecialchars(stripslashes($message));

	return'
	<li>
	<a href="#"><img class="avatar" src="img/avatar.jpg" width="48" height="48" alt="avatar" /></a>
	<div class="tweetTxt">
	<strong><a href="#">demo</a></strong> '. preg_replace('/((?:http|https|ftp):\/\/(?:[A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?[^\s\"\']+)/i','<a href="$1" rel="nofollow" target="blank">$1</a>',$message).'
	<div class="date">'.relativeTime($date).'</div>
	</div>
	<div class="clear"></div>
	</li>';

}

?>
