<?php
  session_start();
   $id = $_GET['id'];
  require_once('../service/functions.php');

  if(!isset($_SESSION['uname'])){
    header("location: login.php");
  }else{

    $result = deleteEvent($id);

    if($result == 1){
      print("<center><h2>Data deleted.</h2></center>");
    }else{
      print("Error.");
    }

  }

?>

