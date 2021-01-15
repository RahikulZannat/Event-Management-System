<?php




  require_once('../service/functions.php');
  $result = getAllchef();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chef List</title>
    <link rel="stylesheet" href="css/cprofile.css" />
  </head>
  <body>
    <hr>
<center>
  <h2>The current Chef List:</h2>
</center>

<hr>
<br><br>
  <center>
    <table border="2" width="80%" height="100%" align="bottom">
      <tr>
        <td>ID</td>
        <td>Name</td>
        <td>AGE</td>
        <td>EXP</td>
        
      </tr>

      <?php while($row = mysqli_fetch_assoc($result)){ ?>
    
    <tr>
      <td><?=$row['cid']?></td>
      <td><?=$row['name']?></td>
      <td><?=$row['age']?></td>
      <td><?=$row['exp']?></td>
      <td>
        <a href="removechef.php?id=<?=$row['eid']?>">Delete</a> 
      </td>
    </tr>
  <?php } ?>

      <tr>
        <td colspan=7 align= center>
          <input type="button" onclick="location.href='cadd.php';" value="Add">
          <input type="button" onclick="location.href='adminui.php';" value="Back">

        </td>
      </tr>
    </table>
      </center>
  </body>
</html>
