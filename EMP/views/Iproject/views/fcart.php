<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Food Cart</title>
</head>
<body>
<center>
	
	
	
	
	<table border="1" width="350px">
	<form>
	
	<tr>
	<td colspan=2 align= "center"><h2>FOOD CART</h2></td>
	</tr>
		
	
	<form>
		<tr>

			<td colspan="1" align= "left">Food Name:</td>
			<td colspan="1" align= "center">Price List(Per person TK):</td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left"><a href="plainrice.php">Plain Rice</a></td>
			<td colspan="1" align= "center">50</td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left"><a href="morogpulao.php">Morog Pulao</a></td>
			<td colspan="1" align= "center">100</td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left"><a href="muttonkacchi.php">Mutton Kacchi</a></td>
			<td colspan="1" align= "center">150</td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left"><a href="biriyani.php">Biriyani</a></td>
			<td colspan="1" align= "center">80</td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left"><a href="borhani.php">Borhani</a></td>
			<td colspan="1" align= "center">40</td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left"><a href="beefjalikabab.php">Beef Jali Kabab</a></td>
			<td colspan="1" align= "center">20</td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left"><a href="chickentanduri.php">Chicken Tandoori</a></td>
			<td colspan="1" align= "center">60</td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left"><a href="chickenfry.php">Chicken Fry</a></td>
			<td colspan="1" align= "center">50</td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left"><a href="chickencurry.php">Chicken Curry</a></td>
			<td colspan="1" align= "center">80</td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left"><a href="beefcurry.php">Beef Curry</a></td>
			<td colspan="1" align= "center">100</td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left"><a href="beefkalavuna.php">Beef Kala Vuna</a></td>
			<td colspan="1" align= "center">100</td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left"><a href="firni.php">Firni</a></td>
			<td colspan="1" align= "center">25</td>
			
		</tr><tr>

			<td colspan="1" align= "left"><a href="jorda.php">Jorda</a></td>
			<td colspan="1" align= "center">30</td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left"><a href="yogurt.php">Yogurt</a></td>
			<td colspan="1" align= "center">20</td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left"><a href="colddrinks.php">Cold Drinks</a></td>
			<td colspan="1" align= "center">20</td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left"><a href="mineralwater.php">Mineral Water</a></td>
			<td colspan="1" align= "center">12</td>
			
		</tr>
		
			<td colspan=2 align= right>
				<input type="button" onclick="location.href='fcadd.php';" value="Add">
				
				<input type="button" onclick="location.href='fcman.php';" value="Manage">
				<input type="button" onclick="location.href='fcremove.php';" value="Remove">
				
				<input type="button" onclick="location.href='adminui.php';" value="Back">

			</td>
		</tr>
	</table>
	</fieldset>
	</form>
	</center>
</body>
</html>