<?php
  session_start();
  if(!isset($_SESSION['uname'])){
    header("location: login.php");
  }
       if ($_SERVER["REQUEST_METHOD"] == "POST") {


           if (empty($_POST["themename"])) {
           $themenameErr = "Theme Name is required";
          // header("location: ../views/AddEvent.php");
          }

          if (empty($_POST["functionName"])) {
           $functionnameErr = "Function Name is required";
          // header("location: ../views/AddEvent.php");
             }
          if (empty($_POST["cost"])) {
           $costErr = "Cost is required";
          // header("location: ../views/AddEvent.php");
             }
         if (empty($_POST["cost"]) || empty($_POST["themename"]) || empty($_POST["functionName"])) {
           $Errormsg = "<h1>Missing Something</h1>";
           //header("location: ../views/AddEvent.php");
             }

      else {
            
                $themename = $_POST['themename'];
                $functionName = $_POST['functionName'];
                $cost = $_POST['cost'];


                $con = mysqli_connect('127.0.0.1', 'root', '', 'webtechprojectdb');
                $sql = "insert into projects values('' , '{$themename}'  ,  '{$functionName}' , '{$cost}')";
                
                if(mysqli_query($con, $sql)){
                  echo "<center><h2><em>Theme Added!</em></h2></center>";
                }
              else
               {
                echo "<center><h2><em>Something Error!</em></h2></center>";
                header("location: ../views/addproject.php");
               }
             
           }
      }
?>
