<?php

include("../../mysqli_connect.php");
session_start();

//post new game
echo 
'<style>

td, th {
   text-align: center;
}
   table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>'
;

// review table
echo "<table>
<caption>Your Game and related reviews</caption>
<thead>
<tr>
<th>Game Name</th>

<th>Review Titles</th>
<th>Added Date</th>
<th>Content</th>
</tr>
</thead>
<tbody>
";

$sql = 'SELECT G.gameID, G.gName, R.title, R.time, R.text
FROM  game G
INNER JOIN review R ON G.gameID = G.gameID
WHERE G.userID = "'.$_SESSION['uid'].'"
ORDER BY gName;
'
;
$result = mysqli_query($conn, $sql);

if (!$sql) {
	die ('SQL Error: ' . mysqli_error($conn));
}


if ($result->num_rows > 0) {
	while ($row = mysqli_fetch_array($result))
	{

		echo '<tr>
		<td>'.$row['gName'].'</td>
		
		<td>'.$row['title'].'</td>
		<td>'.$row['time'].'</td>
		<td>'.$row['text'].'</td>'
		;

		echo '</tr>';
	}

} else {
	echo 
	 ''
	;
}

echo '
</tbody>
</table>';

mysqli_close($conn);


?>



<?php





$sql = 'SELECT userName
FROM  personaluser P
WHERE NOT EXISTS
      ((SELECT G.gameID FROM game G )
	    EXCEPT
		(SELECT R.gameID FROM review R
		 WHERE R.userID= P.userID))'
;


$result = mysqli_query($conn, $sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}


?>


<h2>Interesting information of Your supportor</h2>
  

  <h3>
    <form action="b_report.php" method= "POST"> 
      Do u want to know who is your biggest fan?
      <select name="n_o" onchange="this.form.submit()">
        <option value="???" <?php if(isset($_SESSION["g"]) && $_SESSION["g"] == "???") echo "selected";?>>???</option>
        <option value="Yes" <?php if(isset($_SESSION["g"]) && $_SESSION["g"] == "Newest") echo "selected";?>>Newest</option>
        <option value="No"  <?php if(isset($_SESSION["g"]) && $_SESSION["g"] == "Oldest") echo "selected";?>>Oldest</option>
      </select>
      
      <?php
      if (isset($_SESSION["g"]) && $_SESSION["g"] != "???") {
        echo $_SESSION["gname"];
      } else {
        echo "???";
      }
      ?>
    </form> 
  </h3>
















