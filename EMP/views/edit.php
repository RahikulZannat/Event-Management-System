<?php
	session_start();
	if(!isset($_SESSION['uname'])){
		header("location: login.php");
	}

	//require('../service/db.php');
	require_once('../service/functions.php');
	$id = $_GET['id'];
	$user = getUserDataById($id);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update User Data</title>
</head>
<body>
	<h2>Update User Data</h2>
	<form action="" method="post">
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username" value="<?=$user['username']?>"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" value="<?=$user['password']?>"></td>
			</tr>
			<tr>
				<td>email:</td>
				<td><input type="text" name="email" value="<?=$user['email']?>"></td>
			</tr>
			<tr>
				<td>type:</td>
				<td><input type="text" name="type" value="<?=$user['type']?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="update" value="update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php
	if(isset($_POST['update'])){ 
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$type = $_POST['type'];

		//$sql ="UPDATE users SET username={$username}, password={$password}, email={$email}, type={$type} WHERE id={$GLOBALS['id']}";
		$con = mysqli_connect('127.0.0.1', 'root', '', 'webtectdb');
		$sql ="UPDATE users SET username='{$username}', password='{$password}', email='{$email}', type='{$type}'' WHERE id='{$GLOBALS['id']}'";
		//**$result = mysqli_query($con, $sql);
		//$trueCheck = updateUserData1($username, $password, $email, $type);

		//**print_r($result);



		if(mysqli_query($con, $sql)){
			echo "done!";
		}else{
			echo "Error";
		}
    } 
?>

