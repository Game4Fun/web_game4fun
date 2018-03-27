<?php
include("../../mysqli_connect.php");

session_start();

$gname = $_POST["gname"];
$ginfo = $_POST["ginfo"];
$gsince = $_POST["date"];

// assgin a gid
$res = mysqli_query($conn, "SELECT MAX(gameID) AS gid FROM game");
$row = mysqli_fetch_array($res);
$gid = $row["gid"] + 1;

// prepare and bind
$stmt = $conn->prepare("INSERT INTO game (gameID, gName, since, gameInfo, userID) VALUES (?,?,?,?,?)");
$stmt->bind_param("isssi", $gid, $gname, $gsince, $ginfo, $_SESSION["uid"]);

if ($stmt->execute()) {

	$gcate = array();
	foreach ($_SESSION["allcates"] as $cate) {

		if (isset($_POST[$cate])) {
			//add
			$sql = "INSERT INTO belong (cName, gameID) VALUES ('".$cate."', '".$gid."')";
			$result = mysqli_query($conn, $sql);

			if (!$sql) {
				$_SESSION["rep"] = "add category fail, ".mysqli_error($conn);
				mysqli_close($conn);

				header("Location: g_add.php");
				exit;
			}
		} 
	}

	$_SESSION["rep"] = "Relese success";

} else {
	$_SESSION["rep"] = "Release fail,".$stmt->error;
}

mysqli_close($conn);

header("Location: g_add.php");
exit;
?>