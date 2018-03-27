<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Game4Fun - Reset</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
  <style type="text/css">
  <style>
  .dropdown {
    position: relative;
    display: inline-block;
  }
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
  }
  .dropdown:hover .dropdown-content {
    display: block;
  }
  body{ font: 14px sans-serif; }
  .wrapper{ width: 350px; padding: 20px; }
</style>
</head>
<body background="..\..\login\wallpaper.jpg">
<body><font color="white">
  <div class="wrapper">
    <h2>Personal User</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <die class="form-group">
      </div> </br> </br>

      <?php

        include("../../mysqli_connect.php");
        
        $sql = 'SELECT userName,password FROM personaluser';
        $result = mysqli_query($conn, $sql);

        if (!$sql) {
          die ('SQL Error: ' . mysqli_error($conn));
        }

          echo '<table><thead><tr>
              <th><p style="text-align: center;">Name</p></th>
              <th><p style="text-align: center;">Password</p></th>
          </tr></thead><tbody>';

          while ($row = mysqli_fetch_array($result)){
            echo '<tr>
                <td><p style="text-align: center;">'.$row['userName'].'</p></td>
                <td><p style="text-align: center;">'.$row['password'].'</p></td>
                <button type="reset" formaction="a_reset_p_result.php"  formmethod= "POST" formtarget="_blank" class="btn btn-primary">Reset</button>
            </tr>';
          }

          echo '</tbody></table>';

        mysqli_close($conn);

      ?>

    </div>			
    </form>
</div>
</font></body>

<div id="footer"><p style="text-align: center;"><font color="white">
  &copy; All rights reserved by Game4Fun Group
</font> 
</p></div>

</html>
