<?php




	require_once('../service/functions.php');
	$result = getAllUsers();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Employee List</title>
  </head>
  <body>
    <hr>
<center>
	<h2>The current Employee List:</h2>
</center>

<hr>
<br><br>
  <center>
    <table border="2" width="80%" height="100%">
      <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Occupaton</td>
        <td>DOB</td>
        <td>Joining Date</td>
        <td>Status</td>
        <td>Action</td>
      </tr>

      <?php	while($row = mysqli_fetch_assoc($result)){ ?>
		
		<tr>
			<td><?=$row['eid']?></td>
			<td><?=$row['username']?></td>
			<td><?=$row['position']?></td>
			<td><?=$row['DOB']?></td>
			<td><?=$row['JoiningDate']?></td>
			<td><?=$row['status']?></td>
			<td>
				<a href="Rremoveemployee.php?id=<?=$row['eid']?>">Delete</a> 
			</td>
		</tr>
	<?php } ?>

			<tr>
				<td colspan=7 align= center>
          <input type="button" onclick="location.href='Ruserregistration.php';" value="Add">
					<input type="button" onclick="location.href='Admininterface.php';" value="Back">

				</td>
		  </tr>
    </table>
      </center>
  </body>
</html>
