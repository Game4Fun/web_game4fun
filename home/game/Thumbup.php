<?php
include("../../mysqli_connect.php");
session_start();

?>

<a href="gameP.php?gid=<?php echo $_SESSION['gid']?>">Back</a>


<?php
 
 if(isset($_POST['rID'])){
        
	 

	    $userID = $_SESSION['uid'];
		$rID =    $_POST['rID'];

		$sql = 'INSERT INTO thumbup(userID,rID) VALUES( "' .$userID. '","' .$rID. '")';
		


        if ($conn->query($sql) === TRUE) {
       $_SESSION['tres'] = "New record created successfully";
             header("Location: gameP.php");
       } else {
       $_SESSION['tres'] = "You can not thumbup it twice";
	        header("Location: gameP.php");
        }

$conn->close();
		}
		

 
		
	?>	
