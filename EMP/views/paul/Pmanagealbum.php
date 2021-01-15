<?php




	require_once('../service/functions.php');
	$result = getALLprojects();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Album Theme</title>
  </head>
  <body>
    <hr>
<center>
	<h2>Album Theme List:</h2>
</center>

<hr>
<br><br>
  <center>
    <table border="2" width="80%" height="100%">
      <tr>
        <td>ID</td>
        <td>Theme Name</td>
        <td>Function Name</td>
        <td>Cost</td>
        
      </tr>

      <?php	while($row = mysqli_fetch_assoc($result)){ ?>
		
		<tr>
			<td><?=$row['projectid']?></td>
			<td><?=$row['theme_name']?></td>
			<td><?=$row['function_name']?></td>
			<td><?=$row['cost']?></td>
			<td>
				<a href="Premovealbum.php?id=<?=$row['eid']?>">Delete</a> 
			</td>
		</tr>
	<?php } ?>

			<tr>
				<td colspan=7 align= center>
          <input type="button" onclick="location.href='Paddalbum.php';" value="Add">
					<input type="button" onclick="location.href='PhotographerAdmininterface.php';" value="Back">

				</td>
		  </tr>
    </table>
      </center>
  </body>
</html>
