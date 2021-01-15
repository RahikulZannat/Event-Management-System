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
<div id="VIEW"></div>
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
        <a href="updateEmpInfo.php?id=<?=$row['eid']?>">Update</a>
        <input type="button" value="Delete" onclick="dele(<?=$row['eid']?>)">  
			</td>
		</tr>
	<?php } ?>

<script>
  
      function dele(id){
      var xhttp = new XMLHttpRequest(); 
      
      xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200){
            document.getElementById('VIEW').innerHTML = this.responseText;
          }
      };
      
      xhttp.open("POST", "../php/RemoveEmployee.php?id="+id, true);
      xhttp.send();
    }
</script>



   <!--    <tr>//
                                  <a href="updateEmpInfo.php?id=<?=$row['eid']?>">Update</a> 
        <td>1</td>
        <td>Rahim</td>
        <td>Staff</td>
        <td>01/01/1995</td>
        <td>05/04/2019</td>
        <td>Active</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Karim</td>
        <td>Designer</td>
        <td>06/08/1996</td>
        <td>02/07/2019</td>
        <td>Active</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Efty</td>
        <td>Photographer</td>
        <td>19/05/1997</td>
        <td>01/02/2020</td>
        <td>Deactive</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Paul</td>
        <td>Cook</td>
        <td>01/05/1998</td>
        <td>01/06/2020</td>
        <td>Active</td>
      </tr> -->
			<tr>
				<td colspan=7 align= center>
          <input type="button" onclick="location.href='Registration.php';" value="Add">
					<input type="button" onclick="location.href='home.php';" value="Back">

				</td>
		  </tr>
    </table>
      </center>
  </body>
</html>
