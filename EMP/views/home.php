<?php
	session_start();
	if(!isset($_SESSION['uname'])){
		header("location: login.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>

</body>
</html>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>
<center>
      <h1>This is a manager Home page</h1>
			<h1>Welcome home! <?= $_SESSION['uname']?></h1>
</center>
    <hr>
<div class="topManu">
	<center>

<strong>
		<a href="home.php">Home</a>
		<a href="Personalinfo.php">Personal Info</a>
		<a href="Registration.php">Registration</a>
		<a href="Eventlist.php">Event & Costing</a>
		<a href="Bookinglist.php">Booking List</a>
		<a href="EmployeeList.php">Employee List</a>
		<a href="AssignEmployee.php">Assaign Employee & Hall</a>
		<a href="HallSuggestion.php">Hall Info</a>
		
		<a href="logout.php">LogOut</a>
</strong>
	</center>
</div>
<hr>
<style media="screen">
a{
	margin:10px 10px;
	text-decoration: none;
	font-family: 'Merriweather', serif;
	color: #11999E;
}
a:hover
{
	color: #424874;
}

</style>




  </body>
</html>
