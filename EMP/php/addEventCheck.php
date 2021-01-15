<?php
	session_start();
	if(!isset($_SESSION['uname'])){
		header("location: login.php");
	}


     $eventnameErr = $functionnameErr = $costErr = $Errormsg = "";
     $eventname = $functionname = $cost = "";
     $_POST["cost"] =$costValue;

       if ($_SERVER["REQUEST_METHOD"] == "POST") {


           if (empty($_POST["eventname"])) {
           $eventnameErr = "Event Name is required";
           echo $eventnameErr;
            }

        elseif (empty($_POST["functionName"])) {
           $functionnameErr = "Function Name is required";
             }
        elseif($costValue == '0') {
           $costErr = "Cost is negetive";
           echo $costErr;
             }
        elseif (empty($_POST["cost"]) || empty($_POST["eventname"]) || empty($_POST["functionName"])) {
           $Errormsg = "<h1>Missing Something</h1>";
             }

      else {
            
                $eventname = $_POST['eventname'];
                $functionName = $_POST['functionName'];
                $cost = $_POST['cost'];


                $con = mysqli_connect('127.0.0.1', 'root', '', 'webtechprojectdb');
                $sql = "insert into events values('' , '{$eventname}'  ,  '{$functionName}' , '{$cost}')";
                
                if(mysqli_query($con, $sql)){
                  echo "<center><h2><em>Event Added!</em></h2></center>";
                }
              else
               {
                echo "<center><h2><em>Something Error!</em></h2></center>";
                header("location: ../views/AddEvent.php");
               }
             
           }
      }
?>
