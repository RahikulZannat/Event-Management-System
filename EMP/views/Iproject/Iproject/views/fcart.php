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
	<link rel="stylesheet" href="css/fcart.css" />
</head>
<body>
<center>
	
	
	
	
	<table border="1" width="500px" align="right">
	
	<td colspan=4 align= "center"><h1>FOOD CART</h1></td>
	</tr>
	<form>
		
		<tr>

			<td colspan="1" align= "left">Food Name:</td>
			<td colspan="1" align= "center">Price List(Per person TK):</td>
			<td colspan="2" align= "center">Picture</td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left">Plain Rice</td>
			<td colspan="1" align= "center">50</td>
			<td colspan="1" align= "right"><img src="../img/plainrice.jpg"height="55px" width="110" /></td>
			<td colspan="1" align= "left"><img src="../img/plainrice2.jpg"height="55px" width="110" /></td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left">Morog Pulao</td>
			<td colspan="1" align= "center">100</td>
			<td colspan="1" align= "right"><img src="../img/morogpulao.jpg"height="55px" width="110" /></td>
			<td colspan="1" align= "left"><img src="../img/morogpulao2.jpg"height="55px" width="110" /></td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left">Mutton Kacchi</td>
			<td colspan="1" align= "center">150</td>
			<td colspan="1" align= "right"><img src="../img/kacchi.jpeg"height="55px" width="110" /></td>
			<td colspan="1" align= "left"><img src="../img/kacchi2.jpg"height="55px" width="110" /></td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left">Biriyani</td>
			<td colspan="1" align= "center">80</td>
			<td colspan="1" align= "right"><img src="../img/biriyani.jpg"height="55px" width="110" /></td>
			<td colspan="1" align= "left"><img src="../img/birani.jpg"height="55px" width="110" /></td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left">Borhani</td>
			<td colspan="1" align= "center">40</td>
			<td colspan="1" align= "right"><img src="../img/borhani.jpg"height="55px" width="110" /></td>
			<td colspan="1" align= "left"><img src="../img/borhani2.jpg"height="55px" width="110" /></td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left"> Beef Jali Kabab</td>
			<td colspan="1" align= "center">20</td>
			<td colspan="1" align= "right"><img src="../img/kabab.jpg"height="55px" width="110" /></td>
			<td colspan="1" align= "left"><img src="../img/kabab2.jpg"height="55px" width="110" /></td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left">Chicken Tandoori</td>
			<td colspan="1" align= "center">60</td>
			<td colspan="1" align= "right"><img src="../img/ctanduri.jpg"height="55px" width="110" /></td>
			<td colspan="1" align= "left"><img src="../img/ctanduri2.jpg"height="55px" width="110" /></td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left">Chicken Fry</td>
			<td colspan="1" align= "center">50</td>
			<td colspan="1" align= "right"><img src="../img/cfry.png"height="55px" width="110" /></td>
			<td colspan="1" align= "left"><img src="../img/cfry2.jpg"height="55px" width="110" /></td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left">Chicken Curry</td>
			<td colspan="1" align= "center">80</td>
			<td colspan="1" align= "right"><img src="../img/ccurry.jpg"height="55px" width="110" /></td>
			<td colspan="1" align= "left"><img src="../img/ccurry2.jpg"height="55px" width="110" /></td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left">Beef Curry</td>
			<td colspan="1" align= "center">100</td>
			<td colspan="1" align= "right"><img src="../img/bcurry.jpg"height="55px" width="110" /></td>
			<td colspan="1" align= "left"><img src="../img/bcurry2.jpg"height="55px" width="110" /></td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left">Beef Kala Vuna</td>
			<td colspan="1" align= "center">100</td>
			<td colspan="1" align= "right"><img src="../img/bkvuna.jpg"height="55px" width="110" /></td>
			<td colspan="1" align= "left"><img src="../img/bkvuna2.jpg"height="55px" width="110" /></td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left">Firni</td>
			<td colspan="1" align= "center">25</td>
			<td colspan="1" align= "right"><img src="../img/firni.jpg"height="55px" width="110" /></td>
			<td colspan="1" align= "left"><img src="../img/firni2.jpg"height="55px" width="110" /></td>
			
		</tr><tr>

			<td colspan="1" align= "left">Jorda</td>
			<td colspan="1" align= "center">30</td>
			<td colspan="1" align= "right"><img src="../img/jorda.jpg"height="55px" width="110" /></td>
			<td colspan="1" align= "left"><img src="../img/jorda2.jpg"height="55px" width="110" /></td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left">Yogurt</td>
			<td colspan="1" align= "center">20</td>
			<td colspan="1" align= "right"><img src="../img/yo.jpg"height="55px" width="110" /></td>
			<td colspan="1" align= "left"><img src="../img/yo2.jpg"height="55px" width="110" /></td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left">Cold Drinks</td>
			<td colspan="1" align= "center">20</td>
			<td colspan="1" align= "right"><img src="../img/cd.jpg"height="55px" width="110" /></td>
			<td colspan="1" align= "left"><img src="../img/cd2.jpg"height="55px" width="110" /></td>

		</tr>
		<tr>

			<td colspan="1" align= "left">Mineral Water</td>
			<td colspan="1" align= "center">12</td>
			<td colspan="1" align= "right"><img src="../img/mt2.jpg"height="55px" width="110" /></td>
			<td colspan="1" align= "left"><img src="../img/mt.jpg"height="55px" width="110" /></td>
			
		</tr>
		
			<td colspan=4 align= right>
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