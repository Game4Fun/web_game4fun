<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Business User register Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../style/log_style.css" />
</head>
<style>
</style>
<body>

	<h1 style="text-align: center;">WELCOME TO GAME4FUN!</h1>
	<form style="text-align: center;" action="b_add.php" method= "POST" target="_self">
		<b id = "form">
		<caption>Business user regeister</caption>
		<span>(<span style="color: red">*</span> part must be filled)</span><br>
		<br>
		<span style="color: red">*</span>
		Email:<br>
		<input type="email" name="email" value="" required>
		<br>
		<br>
		<span style="color: red">*</span>
		User Name(less than 20 character):<br>
		<input type="text" name="uname" value="" maxlength="20" required>
		<br>
		<br>
		<span style="color: red">*</span>
		Password(less than 30 character):<br>
		<input type="text" name="psw" value="" maxlength="30" required>
		<br>
		<br>
		Official site:<br>
		<input type="url" name="officialSite" value=" ">
		<br>
		<br>
		<span style="color: red">*</span>
		Notification:<br>
		<input type="radio" name="notif" value="1"> Yes
		<input type="radio" name="notif" value="0" checked> No<br>
		</b>
		<br>
		<b style="color: red"><?php echo $_SESSION["rep"];
		$_SESSION["rep"] = " "; ?></b>
		<br>
		<input class="btn btn-primary" type="submit" value="Register now">
		<button class="btn btn-primary" type="button" onclick="back()">Back to log in</button>	
	</form>
	<script type="text/javascript">
		function back(){
			window.open("login_next.php","_self");
		}
	</script>

</body>
<br>
<div id="footer"><p style="text-align: center;"><font color="white">
	&copy; All rights reserved by Game4Fun Group
</font> 
</p>
</div>
</html>