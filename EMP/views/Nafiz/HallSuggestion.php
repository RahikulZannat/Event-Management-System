<?php
	session_start();
	if(!isset($_SESSION['uname'])){
		header("location: login.php");
	}

    require_once('../service/functions.php');
    $result = getAlleventplace();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hall Suggestion</title>
  </head>
  <body>
      <center>
         <hr>
				<h2>Suggested Hall for Booking & Price</h2>
         <hr>
         <div id="del"></div>
   <br><br>
<img src="../img/10.jpg" width="320px" height="250px" id="wedding" onclick="hall('Wedding')">
<img src="../img/50.jpg" width="200px" height="250px" id="birthday" value="1" onclick="hall('Birthday')">
<img src="../img/41.jpg" width="200px" height="250px" id="picnic" value="1" onclick="hall('Picnic')">

<br><br>

<div id="VIEW"></div>

  <script>
    
    function hall(a){
      var search = a; //document.getElementById("wedding").value;
      var xhttp = new XMLHttpRequest(); 
      
      xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200){
            document.getElementById('VIEW').innerHTML = this.responseText;
          }
      };
      
      xhttp.open("GET", "../php/HallInfo.php?key="+search, true);
      xhttp.send();
    }


      function dele(id){
      var xhttp = new XMLHttpRequest(); 
      
      xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200){
            document.getElementById('VIEW').innerHTML = this.responseText;
          }
      };
      
      xhttp.open("POST", "../php/RemoveHall.php?id="+id, true);
      xhttp.send();
    }
  
  </script>






<!-- 




    <table border="2" width="50%">
    <tr>
      <td>  <strong>Events</strong>  </td>
      <td>  <strong>Suggested Place</strong></td>
      <td>  <strong>Cost</strong></td>
      <td>  <strong>Action</strong></td>
   </tr>


    <?php while($row = mysqli_fetch_assoc($result)){ ?>

    <tr>
      <td><strong><?=$row['eventname']?></strong></td>
      <td><strong><?=$row['placeName']?></strong></td>
      <td><?=$row['cost']?></td>
      <td>
          <a href="updateHall.php?id=<?=$row['placeid']?>">Update</a> /
          <a href="RemoveHall.php?id=<?=$row['placeid']?>">Delete</a> 
          <input type="button"id="name" name="delete" value="Delete" onclick="hall()">
      </td>
  </tr>

<?php } ?> -->


  <!-- <tr>
    <td>
      <strong>
        <a href="img\2.jpg">Grand Ballroom, Pan Pacific Sonargaon</a>
      </strong></td>
        <td>150000</td>
  </tr>
  <tr>
  <td>
    <strong>
      <a href="img\3.jpg">Celebration Hall, Dhaka Regency Hotel and Resort</a>
    </strong></td>
      <td>100000</td>
  </tr>
  <tr>
  <td>
    <strong>
      <a href="img\4.jpg">La Vita Banquet Hall, Lakeshore Hotel</a>
    </strong></td>
      <td>80000</td>

  </tr>
<tr>
<td>
  <strong>
    <a href="img\5.jpg">Rashni Mahal, Grand Sultan Tea Resort & Golf</a>
  </strong></td>
    <td>50000</td>

  </tr>
  <tr>
    <td rowspan="5"><strong>Birthday</strong></td>
<td>
  <strong>
    <a href="img\11.jpg">Bird's Eye Roof Top Restaurant and Convention Hall</a>
  </strong></td>
    <td>10000</td>
  </tr>
<tr>
  <td>
    <strong>
      <a href="img\12.jpg">Cozy Sizzler Restaurant</a>
    </strong> </td>
      <td>20000</td>
</tr>

<tr>
<td>
  <strong>
    <a href="img\13.jpg">Spaghetti Jazz, Dhaka</a>
  </strong></td>
    <td>10000</td>
</tr>
<tr>
<td>
  <strong>
    <a href="img\14la.jpg">The Atrium Restaurant</a>
  </strong></td>
    <td>50000</td>
</tr>
<tr>
<td>
  <strong>
    <a href="img\16.jpg">Crème de la Crème Coffee</a>
  </strong></td>
    <td>50000</td>
</tr>
<tr>
  <td rowspan="4"><strong>Picnic</strong></td>
<td>
  <strong>
    <a href="img\lal.jpg">Lalbagh Fort</a>
  </strong></td>
    <td>10000</td>
  </tr>
<tr>
<td>
  <strong>Zinda Park</strong> </td>
    <td>10000</td>
</tr>
<tr>
<td>
  <strong>Dream Holiday Park</strong></td>
    <td>10000</td>
</tr>
<tr>
<td>
  <strong>
Aladin's Park-Amusement Theme Park</strong></td>
  <td>8000</td>
</tr> -->
<tr>
	<td colspan=4 align=center>
		<input type="button" onclick="location.href='home.php';" value="Back">
	</td>
</tr>
    </table>
      </center>
  </body>
</html>
