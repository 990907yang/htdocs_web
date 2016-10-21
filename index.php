<?php
	require_once("./db.php");
	$get= isset($_GET["param"]) ? explode("/",$_GET["param"]) : null;
	$dir = isset($get[0]) ? $get[0] : null;
	$page = isset($get[1]) ? $get[1] : null;
	if($dir==null || $page==null){
		$dir = "home";
		$page = "main";
	}
?>
<!doctype html>
<html lang="ko">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>서울디지텍고등학교</title>
  <link rel="stylesheet" href="/common/css/style.css"/>
  <link rel="stylesheet" href="/common/js/fullPage.js-master/jquery.fullPage.css"/>
  <script src="/common/js/jquery.js"></script>
  <script src="/common/js/main.js"></script>
  <script src="/common/js/fullPage.js-master/jquery.fullPage.js"></script>
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDb1izsHyAeUgcoaFL5tJQQh6QoX_2Ok78&signed_in=true&language=ko&callback=initMap"></script>
  <script src="/common/js/gmap.js"></script>
 </head>
 <body>
	<div id="wrap">
		<header class="header <?=$page?>">
			<div class="header_wrap">
				<h1><a href="/">S<span class="amp">D</span>HS</a></h1>
				<nav>
					<ul id="menu">
						<li data-menuanchor="about"><a href="#about">HOME</a></li>
						<li data-menuanchor="overview"><a href="#overview">GAME</a></li>
						<li data-menuanchor="features"><a href="#features">UBIQUITOUS</a></li>
						<li data-menuanchor="case"><a href="/#case">SPACE</a></li>
						<li data-menuanchor="contact"><a href="#contact">CONTACT</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<section>
			<?php include_once ($_SERVER["DOCUMENT_ROOT"]."/page/{$dir}/{$page}.php"); ?>
		</section>
		<footer></footer>
	</div>

	
 </body>
</html>
