<!DOCTYPE html>
<html>
<head>
	<title>Delet comfir Page</title>
</head>
<style>
</style>
<body>
	<form style="text-align: left;" action="sample_manager.php" target="_self">
		<caption><?php
		echo "Are you sure you want to delet this ";
		if (isset($_POST["gid"])) {
			echo "game";
		} elseif (isset($_POST["rid"])) {
			echo "review";
		} else {
			echo "comment";
		}
		echo " ???";
		?></caption>
		<br><br>
		<input type="submit" value="Back to manager">
		<button type="submit" formaction="delet.php"  formmethod= "POST" formtarget="_self" 
		<?php
		echo "name=";
		if (isset($_POST["gid"])) {
			echo "'gid'";
			echo " value='".$_POST["gid"]."'";
		} elseif (isset($_POST["rid"])) {
			echo "'rid'";
			echo " value='".$_POST["rid"]."'";
		} else {
			echo "'cid'";
			echo " value='".$_POST["cid"]."'";
		}
		?>
		>Yes</button>	
	</form>
</body>
<br>
</html>