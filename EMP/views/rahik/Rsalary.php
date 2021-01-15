<?php

	require_once('../service/functions.php');
	$result = getAllsalary();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Salary</title>
  </head>
  <body>
    <hr>
<center>
	<h2>All Salary</h2>
</center>

<hr>
<br><br>
  <center>
    <table border="2" width="80%" height="100%">
      <tr>
        <td>ID</td>
        <td>Employee Name</td>
        <td>Position</td>
        <td>Salary</td>
        
        
      </tr>

      <?php	while($row = mysqli_fetch_assoc($result)){ ?>
		
		<tr>
			<td><?=$row['eid']?></td>
			<td><?=$row['username']?></td>
			<td><?=$row['position']?></td>
			<td><?=$row['salary']?></td>
			
			<td>
				<a href="Rdeletesalary.php?id=<?=$row['eid']?>">Delete</a> 
			</td>
		</tr>
	<?php } ?>

			<tr>
				<td colspan=7 align= center>
          <input type="button" onclick="location.href='Raddsalary.php';" value="Add">
					<input type="button" onclick="location.href='Admininterface.php';" value="Back">

				</td>
		  </tr>
    </table>
      </center>
  </body>
</html>
