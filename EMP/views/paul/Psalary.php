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
        <td>Photographer Name</td>
        <td>Salary</td>
        
        
      </tr>

      <?php	while($row = mysqli_fetch_assoc($result)){ ?>
		
		<tr>
			<td><?=$row['ID']?></td>
			<td><?=$row['Employee Name']?></td>
			<td><?=$row['Salary']?></td>
			
			<td>
				<a href="Pdeletesalary.php?id=<?=$row['eid']?>">Delete</a> 
			</td>
		</tr>
	<?php } ?>

			<tr>
				<td colspan=7 align= center>
          <input type="button" onclick="location.href='Paddsalary.php';" value="Add">
					<input type="button" onclick="location.href='PhotographerAdmininterface.php';" value="Back">

				</td>
		  </tr>
    </table>
      </center>
  </body>
</html>
