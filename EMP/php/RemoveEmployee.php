<?php
	session_start();
   $id = $_GET['id'];
  require_once('../service/functions.php');

	if(!isset($_SESSION['uname'])){
		header("location: login.php");
	}else{

    $result = deleteUser($id);
    //print_r($result);

    if($result == 1){
      print("<center><h2>Data deleted.</h2></center>");
      header("location:../views/EmployeeList.php");
    }else{
      print("Error.");
    }

  }

?>

