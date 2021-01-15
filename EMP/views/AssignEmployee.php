<?php
	session_start();
	if(!isset($_SESSION['uname'])){
		header("location: login.php");
	}

	require_once('../service/functions.php');
	$result = getAssignEmployee();
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Employee List on Booked Events</title>
  </head>
  <body>
      <center>
				<h2>Assaigned EmployeeList on Booked Event</h2>
    <table border="2">
      <tr>
        <td><strong>SL no</strong></td>
        <td><strong>Event Name</strong></td>
        <td><strong>Date</strong></td>
        <td><strong>Client Name</strong></td>
        <td><strong>Contact no</strong></td>
        <td><strong>Photographer</strong></td>
        <td><strong>Catering</strong></td>
        <td><strong>Place</strong></td>
        <td><strong>Action</strong></td>
      </tr>

       <?php while($row = mysqli_fetch_assoc($result)){ ?>
     
      <tr>
        <td><?=$row['bookid']?></td>
        <td><h4><?=$row['eventname']?></h4></td>
        <td><?=$row['date']?></td>
        <td><?=$row['username']?></td>
        <td><?=$row['contactNo']?></td>
        <td><h4><?=$row['photographer']?></h4></td>
        <td><h4><?=$row['catering']?></h4></td>
        <td><h4><?=$row['placeName']?></h4></td>
        <td><a href="updateAssainEmp.php?id=<?=$row['bookid']?>">Update</a></td>
      </tr>

      <?php } ?>

     
<!--       <tr>
        <td>2</td>
        <td><h4>Wedding</h4></td>
        <td>15/03/2020</td>
        <td>MD.Karim Hossain</td>
        <td>01543594775</td>
        <td><h4>Efty</h4></td>
        <td><h4>Paul</h4></td>
      </tr>
      <tr>
        <td>3</td>
        <td><h4>Picnic</h4></td>
        <td>20/04/2020</td>
        <td>MD.Rahman Chowdhury</td>
        <td>01754453565</td>
        <td><h4>Not Assigned</h4></td>
        <td><h4>Ahamed Khan</h4></td>
      </tr>
      <tr>
        <td>3</td>
        <td><h4>Recipetion</h4></td>
        <td>26/05/2020</td>
        <td>Mr.Ahsanul Kabir</td>
        <td>0165453756</td>
        <td><h4>Miraz Hasan</h4></td>
        <td><h4>Not Assaign</h4></td>
      </tr>
      -->
			<tr> 
        <td colspan=9 align=center>
          <input type="button" onclick="location.href='home.php';" value="Back">
        </td>
      </tr>
    </table>
      </center>
  </body>
</html>
