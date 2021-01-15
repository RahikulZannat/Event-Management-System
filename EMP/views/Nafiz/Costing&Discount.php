<?php
	session_start();
	if(!isset($_SESSION['uname'])){
		header("location: login.php");
	}

  require_once('../service/functions.php');
  $result = getCostingDetails();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Costing List</title>
  </head>
  <body>
		<center>
    <hr>
		<h2>Costing & Discount details</h2>
<hr>
<br>
    <table border="2">
    <tr>
      <td>  <strong>Events</strong>  </td>
      <td>  <strong>function</strong></td>
      <td> <strong>Cost</strong>
        <td>
          <strong>Pakage</strong>
        </td>
        <td>
          <strong>Discount</strong></td>
      </td>
   </tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>
  <tr>
    <td><strong><?=$row['eventname']?></strong></td>
    <td><?=$row['functionName']?></td>
    <td><?=$row['cost']?></td>
    <td><?=$row['pakageCost']?></td>
    <td><?=$row['pakageDiscount']?></td>


  </tr>


  <?php } ?>



   <!-- 
    <tr>
      <td rowspan="5"><strong>Wedding</strong>
      <br>(Pakage)
    </td>
  <td>1.Premier Wedding planning.</td>
    <td rowspan="2">100000/=</td>
    <td rowspan="5">500000</td>
    <td rowspan="5">20% Discount on  Pakage Booking</td>
  <tr>
    <td> 2.Royal Wedding planning at BD.</td>

  </tr>

  <tr>
  <td>3.Holud Stage Decoration.</td>
    <td>50000</td>
  </tr>
  <tr>
  <td>4.Wedding Entrance.</td>
    <td>40000</td>
  </tr>
<tr>
<td>5.Wedding & Recipetion Stage Decoration.</td>
  <td>200000</td>
  </tr>
  <tr>
    <td rowspan="5"><strong>Birthday</strong>
    <br>(Pakage)</td>
<td>1.Birthday-party Planner</td>
  <td>30000</td>
  <td rowspan="5">100000</td>
  <td rowspan="5">10% Discount on  Pakage Booking</td>
<tr>
  <td> 2.Birthday-party Themes</td>
  <td>50000</td>
</tr>

<tr>
<td>3.Birthday Ballon Decor</td>
  <td>40000</td>
</tr>
<tr>
<td>4.Games & activities</td>
  <td>30000</td>
</tr>
<tr>
<td>5.Birthday Mascot or Doll</td>
<td>20000</td>
</tr>
<tr>
  <td rowspan="4"><strong>Picnic</strong>
  <br>(Pakage)</td>
<td>1.Picnic Spot</td>
<td>30000</td>
<td rowspan="4">50000</td>
<td rowspan="4">5% Discount on  Pakage Booking</td>
<tr>
<td> 2.Lunch & Snacks</td>
<td>5000</td>
</tr>

<tr>
<td>3.Ride</td>
<td>10000</td>
</tr>
<tr>
<td>4.Transportion</td>
<td>10000</td>
</tr>
 -->



<tr>
	<td colspan=5 align=center>
		<input type="button" onclick="location.href='home.php';" value="Back">
	</td>
</tr>
    </table>
</center>

  </body>
</html>
