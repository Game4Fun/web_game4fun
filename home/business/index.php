<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Business home page</title>
	<link rel="stylesheet" type="text/css" href="../../style/hp_style.css" />
</head>
<style>
h1 {
	color: blue;
	font-family: verdana;
	font-size: 300%;
}

iframe:focus { 
	outline: none;
}

iframe[seamless] { 
	display: block;
}

</style>
<body>
	<div id="wrapper">
		<div id="banner">
			<h1 style="text-align: center;">WELCOME TO GAME4FUN!</h1>             
		</div>

		<nav id="navigation">
			<ul style="text-align: center;" id="nav">
				<li><a href="b_info.php" target="iframe">Business user information</a></li>
				<li><a href="../game/gamepg.php" target="iframe">game</a></li>
				<li><a href="../manager/sample_manager.php" target="iframe">manage game</a></li>
				<li><a href="b_r.php" target="iframe">report</a></li>
				<li><a href="../../login/log_out.php">log out</a></li>
			</ul>
		</nav>

		<div id="content_area">

			<iframe src="b_info.php" name ="iframe" style="border:none;" height="600" width="100%"></iframe>
			
		</div>

		<footer>
			<p>All rights reserved by Game4Fun Group</p>
		</footer>
	</div>	
</body>
</html>