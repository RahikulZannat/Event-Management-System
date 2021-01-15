<?php
  session_start();
  if(!isset($_SESSION['uname'])){
    header("location: login.php");
  }
       if ($_SERVER["REQUEST_METHOD"] == "POST") {


           if (empty($_POST["name"])) {
           $nameErr = "Name is required";
           echo $nameErr;
          // header("location: ../views/AddEvent.php");
          }

          if (empty($_POST["age"])) {
           $ageErr = "age is required";
          // header("location: ../views/AddEvent.php");
             }
          if (empty($_POST["exp"])) {
           $expErr = "expCost is required";
          // header("location: ../views/AddEvent.php");
             }
         if (empty($_POST["exp"]) || empty($_POST["pname"]) || empty($_POST["age"])) {
           $Errormsg = "<h1>Missing Something</h1>";
           //header("location: ../views/AddEvent.php");
             }

      else {
            
                $name = $_POST['name'];
                $age= $_POST['age'];
                $exp = $_POST['exp'];


                $con = mysqli_connect('127.0.0.1', 'root', '', 'webtechprojectdb');
                $sql = "insert into chef values('' , '{$name}'  ,  '{$age}' , '{$exp}')";
                
                if(mysqli_query($con, $sql)){
                  echo "<center><h2><em> Added!</em></h2></center>";
                }
              else
               {
                echo "<center><h2><em>Something Error!</em></h2></center>";
                header("location: ../views/cprofile.php");
               }
             
           }
      }
?>
