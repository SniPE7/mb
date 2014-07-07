<?php
//Function that returning the path
$url = $_SERVER['REQUEST_URI'];
$url = str_replace("index.php", "", $url);
//$url = str_replace("mb/", "", $url);

$themes = "themes";

if (strpos($url, $themes) == false)
    $url = $url . "themes/theme2";
?>

<!DOCTYPE HTML>

<html>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?echo $url;?>/css/style.css"/>
	</head>
	<body>

    <div id="frame_in">
		<div id="body">
			<a class="" href="#"><img width="319" height="189" src="<?echo $url;?>/images/home_pic.jpg" /></a>
            <a class="icon" href="#"><img src="<?echo $url;?>/images/f_ico.png" /></a>
            <a class="icon" href="#"><img src="<?echo $url;?>/images/t_ico.png" /></a>
			<div id="categories">
				<ul>		
					<li><a href='#'><div class='arrow'><img src='<?echo $url;?>/images/button.jpg' /><span class="text">בעבודה</span></div></a></li>
					<li><a href='#'><div class='arrow'><img src='<?echo $url;?>/images/button.jpg' /><span class="text">אודותינו</span></div></a></li>
					<li><a href='#'><div class='arrow'><img src='<?echo $url;?>/images/button.jpg' /><span class="text">תחומי פעילות</span></div></a></li>
					<li><a href='#'><div class='arrow'><img src='<?echo $url;?>/images/button.jpg' /><span class="text">מאמרים</span></div></a></li>
					<li><a href='#'><div class='arrow'><img src='<?echo $url;?>/images/button.jpg' /><span class="text">צור קשר</span></div></a></li>
				</ul>

			</div>
		</div>

		<div id="footer">
			<p>
				כל הזכויות שמורות ©
			</p>
		</div>
    </div>

