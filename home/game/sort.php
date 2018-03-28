<?php
include("../../mysqli_connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>GameList</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
  <style type="text/css">
</style>
</head>
<body>
  <div class="wrapper">
    <h2>GameList</h2>
    <p>Game released so far.</p>

	
    <form action="sort.php" method="post">
     	
      <input type="submit" value="ACTION"  name="sortT"   />
	  <input type="submit" value="FREE"    name="sortT"   />
	  <input type="submit" value="RACING"  name="sortT"   />
	  <input type="submit" value="RPG"     name="sortT"   />
	  <input type="submit" value="SPORTS"  name="sortT"   />
	  <input type="submit" value="OTHER"   name="sortT"   />
	  
	  </div>
	  
	  	  
	  
      <?php 
	      if(isset($_POST['sortT'])){
			       
      include("../../mysqli_connect.php");

      $sql = 'SELECT G.gameID,gName,since FROM game G,belong B WHERE G.gameID=B.gameID AND B.cname = "'.$_POST['sortT'].'"';
      
	  
	  $result = mysqli_query($conn, $sql);

      if (!$result) {
        die ('SQL Error: ' . mysqli_error($conn));
      }

      echo '<table>
      <thead>
      <tr>
      <th>GName</th>
      <th>date</th>
      </tr>
      </thead>
      <tbody>';

	        echo '
      </tbody>
      </table>';
      while ($row = mysqli_fetch_array($result))
      {

     ?><p><a href="gameP.php?gid=<?php echo $row['gameID']?>"><?php echo $row['gName']?>   </a> <?php echo $row['since']?> </p> 
	   
	 <?php
  
      }
	  



      mysqli_close($conn);
	  }
        
		
		?>

    </div>			

	

  </form>

</div>


</body>


</html>



