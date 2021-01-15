<?php
	session_start();
	if(!isset($_SESSION['uname'])){
		header("location: login.php");
	}

  require_once('../service/functions.php');
  $result = getBooking();
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Booking List</title>
  </head>
  <body>
		<center>
			<hr>
			<h2>Booking of current Time </h2>
	<hr>
	<br>
    <table border="2" width="60%">
      <tr>
        <td>SL no</td>
        <td>Event Name</td>
        <td>Date</td>
        <td>Client Name</td>
        <td>Contact no</td>
        <td>Admin Approval</td>
        <td>Action</td>
      </tr>

   <?php while($row = mysqli_fetch_assoc($result)){ ?>

      <tr>
        <td><?=$row['bookid']?></td>
        <td><?=$row['eventname']?></td>
        <td><?=$row['date']?></td>
        <td><?=$row['username']?></td>
        <td><?=$row['contactNo']?></td>
        <td><h4>Approved</h4></td>
        <td>
            <a href="updateBooking.php?id=<?=$row['bookid']?>">Update</a> /
            <a href="RemoveEvent.php?id=<?=$row['bookid']?>">Delete</a> 
      </td>
      </tr>

      <?php } ?>





<!--       <tr>
        <td>2</td>
        <td><h4>Wedding</h4></td>
        <td>15/03/2020</td>
        <td>MD.Karim Hossain</td>
        <td>01543594775</td>
        <td><h4>Approved</h4></td>
      </tr>
      <tr>
        <td>3</td>
        <td><h4>Picnic</h4></td>
        <td>20/04/2020</td>
        <td>MD.Rahman Chowdhury</td>
        <td>01754453565</td>
        <td><h4>DisApproved</h4></td>
      </tr>
      <tr>
        <td>3</td>
        <td><h4>Recipetion</h4></td>
        <td>26/05/2020</td>
        <td>Mr.Ahsanul Kabir</td>
        <td>01654537565</td>
        <td><h4>Approved</h4></td>
      </tr> -->
			<tr>
				<td colspan=7 align=center>
					<input type="button" onclick="location.href='home.php';" value="Back">
				</td>
			</tr>
    </table>
			</center>
  </body>
</html>
