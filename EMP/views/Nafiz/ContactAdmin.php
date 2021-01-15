<?php
	session_start();
	if(!isset($_SESSION['uname'])){
		header("location: login.php");
	}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Admin</title>
  </head>
  <body>
      <center>
        <hr>
			<h2>Message For Admin</h2>

<hr>

    <form class="" action="index.html" method="post">
      <table>
        <tr>
          <td><strong>Date:</strong></td>
          <td><input type="date" name="" value=""></td>
        </tr>
        <tr>
  			<td><strong>Message: </strong> </td>
  			<td>
  				<textarea> </textarea>
  			</td>
  		</tr>
  		<tr>
  			<td></td>
  			<td>
  				<input type="button" name="" value="Send">
					<input type="button" onclick="location.href='home.php';" value="Back">
  			</td>
  		</tr>

      </table>

    </form>
      </center>
  </body>
</html>
