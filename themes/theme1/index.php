<?php
//Function that returning the path
$url = $_SERVER['REQUEST_URI'];
$url = str_replace("index.php", "", $url);
//$url = str_replace("mb/", "", $url);

$themes = "themes";

if (strpos($url, $themes) == false)
    $url = $url . "themes/theme1";
?>

<!DOCTYPE HTML>

<html>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="<?echo $url;?>/css/style.css"/>
	</head>
	<body>
    <div id="frame_in">
		<div id="top_bar">
			<a class="" href="#"><img src="<?echo $url;?>/images/social_facebook_box_blue.png" /></a>
			<a class="" href="#"><img src="<?echo $url;?>/images/social_twitter_box_blue.png" /></a>
			<a class="home" href="#"><img src="<?echo $url;?>/images/home.png" /></a>
		</div>
		<div id="body">
			<a class="" href="#"><img width="319" height="189" src="<?echo $url;?>/images/burgerim.jpg" /></a>
			<div id="categories">
				<ul>		
					<li><a href='#'><div class='arrow'><img src='<?echo $url;?>/images/monotone_arrow_left_small.png' /><span class="text">בעבודה</span></div></a></li>
					<li><a href='#'><div class='arrow'><img src='<?echo $url;?>/images/monotone_arrow_left_small.png' /><span class="text">אודותינו</span></div></a></li>
					<li><a href='#'><div class='arrow'><img src='<?echo $url;?>/images/monotone_arrow_left_small.png' /><span class="text">תחומי פעילות</span></div></a></li>
					<li><a href='#'><div class='arrow'><img src='<?echo $url;?>/images/monotone_arrow_left_small.png' /><span class="text">מאמרים</span></div></a></li>
					<li><a href='#'><div class='arrow'><img src='<?echo $url;?>/images/monotone_arrow_left_small.png' /><span class="text">צור קשר</span></div></a></li>
				</ul>

			</div>
		</div>
		<div id="bottom_bar">

		</div>
		<div id="footer">
			<p>
				כל הזכויות שמורות ©
			</p>
		</div>
    </div>
	</body>
