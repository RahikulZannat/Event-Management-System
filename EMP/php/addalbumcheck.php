<?php
  session_start();
  if(!isset($_SESSION['uname'])){
    header("location: login.php");
  }

   /*  $eventnameErr = $functionnameErr = $costErr = $Errormsg = "";
     $eventname = $functionname = $cost = "";
*/
       if ($_SERVER["REQUEST_METHOD"] == "POST") {


           if (empty($_POST["theme_name"])) {
           $eventnameErr = "Event Name is required";
           echo $eventnameErr;
          // header("location: ../views/AddEvent.php");
          }

          if (empty($_POST["function_name"])) {
           $functionnameErr = "Function Name is required";
          // header("location: ../views/AddEvent.php");
             }
          if (empty($_POST["cost"])) {
           $costErr = "Cost is required";
          // header("location: ../views/AddEvent.php");
             }
         if (empty($_POST["cost"]) || empty($_POST["theme_name"]) || empty($_POST["function_name"])) {
           $Errormsg = "<h1>Missing Something</h1>";
           //header("location: ../views/AddEvent.php");
             }

      else {
            
                $eventname = $_POST['theme_name'];
                $functionName = $_POST['function_name'];
                $cost = $_POST['cost'];


                $con = mysqli_connect('127.0.0.1', 'root', '', 'webtechprojectdb');
                $sql = "insert into events values('' , '{$theme_name}'  ,  '{$function_name}' , '{$cost}')";
                
                if(mysqli_query($con, $sql)){
                  echo "<center><h2><em>Album Added!</em></h2></center>";
                }
              else
               {
                echo "<center><h2><em>Something Error!</em></h2></center>";
                header("location: ../views/addproject.php");
               }
             
           }
      }
?>
