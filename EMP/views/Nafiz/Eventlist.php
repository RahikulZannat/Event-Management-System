<?php
	session_start();
	if(!isset($_SESSION['uname'])){
		header("location: login.php");
	}

  require_once('../service/functions.php');
  $result = getallevents();
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Event List</title>
  </head>
  <body>
    <center>
 <hr>
 			<h2>Event We Manage</h2>
<hr>
<br><br>
<img src="../img/10.jpg" width="320px" height="250px" id="wedding" onclick="abc('Wedding')">
<img src="../img/50.jpg" width="200px" height="250px" id="birthday" value="1" onclick="abc('Birthday')">
<img src="../img/41.jpg" width="200px" height="250px" id="picnic" value="1" onclick="abc('Picnic')">

<br><br>

<div id="VIEW"></div>

  <script>
    
    function abc(id){
      
      var search = id;//document.getElementById("id").value;
      var xhttp = new XMLHttpRequest(); 
      
      xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200){
            document.getElementById('VIEW').innerHTML = this.responseText;
          }
      };
      
      xhttp.open("GET", "../php/Event.php?key="+search, true);
      xhttp.send();
    }

    function dele(id){
      var xhttp = new XMLHttpRequest(); 
      
      xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200){
            document.getElementById('VIEW').innerHTML = this.responseText;
          }
      };
      
      xhttp.open("POST", "../php/RemoveEvent.php?id="+id, true);
      xhttp.send();
    }
  
  </script>


<tr>
	<td colspan=4 align= center>
    <br>
		<input type="button" onclick="location.href='AddEvent.php';" value="Add">
		<input type="button" onclick="location.href='home.php';" value="Back">

	</td>
</tr>

    </table> 
    </center>
  </body>
</html>
