<?php
	session_start();
	if(!isset($_SESSION['uname'])){
		header("location: login.php");
	}

	require_once('../service/functions.php');
	$result = getEmployee();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Personal Info</title>
  </head>
  <body>

  <table width="90%">
      <tr>
        <td width="20%"><img src="../img/ProfileImage.jpg" alt=""height="260px" width="250px"></td>
         <td></td>

    <td>

     <form action="" method="post">
    <fieldset>
      <legend>Personal Info</legend>
    <table width="90%" border="2">

   
       
    
	    

      <?php while($row = mysqli_fetch_assoc($result)){ ?>
    
	        <tr><td>ID:</td>
	      		<td><strong><?=$row['eid']?></strong></td></tr>
	      	<tr><td>Name:</td>
	      		<td><strong><?=$row['username']?></strong></td></tr>
	        <tr><td>Password:</td>
	        	<td><?=$row['password']?></td>
	        </tr>
	        <tr><td>DOB:</td>
	        	<td><?=$row['DOB']?></td>
	        </tr>
	        <tr><td>Email:</td>
	        	<td><?=$row['email']?></td></tr>
	        <tr><td>Blood Group: </td>
	        	<td><?=$row['BG']?></td></tr>
	        <tr><td>Joining Date: </td>
	        	<td><?=$row['JoiningDate']?></td></tr>
	        <tr><td>Positon:</td>
	        	<td><strong><?=$row['position']?></strong></td></tr>
	        <tr><td>Address:</td>
	        	<td><?=$row['address']?></td></tr>

	     

	       
  
      <tr>
       
        <td colspan="2"> 
        	<center>
        		      <a href="updatePersonalinfo.php?id=<?=$row['eid']?>">Update</a>
					  <input type="button" onclick="location.href='home.php';" value="Back">
			</center>
        </td>
      </tr>
       <?php } ?>
       
    </table>
    </fieldset>
    </form>
    </td>
      </table>
  </body>
</html>


