<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <title>Manger Page</title>
</head>
<style>
table {
  width: 100%;
}
caption {
  text-align: left;
}
td {
  text-align: center;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<body>


  <h2>Interesting information of Your supportor</h2>
  
  <h3>
    <form action="topfan.php" method= "POST"> 
      Do u want to know who is your super fan?
      <select name="fan" onchange="this.form.submit()">
        <option value="???" <?php if(isset($_SESSION["f"]) && $_SESSION["f"] == "???") echo "selected";?>>???</option>
        <option value="Yes" <?php if(isset($_SESSION["f"]) && $_SESSION["f"] == "Yes") echo "selected";?>>Yes</option>
        <option value="No"  <?php if(isset($_SESSION["f"]) && $_SESSION["f"] == "No") echo "selected";?>>No</option>
      </select>
      
      <?php
      if (isset($_SESSION["f"]) && $_SESSION["f"] == "Yes") {
        if ($_SESSION["nogame"] == "yes") {
          echo "you want fan? release a game first";
        } else {
          if (isset($_SESSION["nofan"]) && $_SESSION["nofan"]  == "yes") {
            echo "no super fan";
          } else {
            foreach ($_SESSION["fans"] as $name) {
              echo $name;
              echo " ";
            }
          }
          
        }
      } else {
        echo "???";
      }
      ?>
      <p style="font-size: 15px">(super fan is the one who wrote at least one of review for all your games)</p>
    </form>
    <br>
    <br>
    <?php
    // generate form 
    include("b_report_generator.php");
    ?>
  </h3>

</body>
</html>
















