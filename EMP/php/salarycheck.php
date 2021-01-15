<?php
	session_start();
	if(!isset($_SESSION['uname'])){
		header("location: login.php");
	}
    if ($_SERVER["REQUEST_METHOD"] == "POST") {


           if (empty($_POST["eid"])) {
           $eidErr = "EID is required";
           echo $eidErr;
          // header("location: ../views/AddEvent.php");
          }

          if (empty($_POST["Name"])) {
           $enameErr = "ENAME is required";
          // header("location: ../views/AddEvent.php");
             }
          if (empty($_POST["salary"])) {
           $costErr = "Salary is required";
          // header("location: ../views/AddEvent.php");
             }
         if (empty($_POST["salary"]) || empty($_POST["eid"]) || empty($_POST["Name"])) {
           $Errormsg = "<h1>Missing Something</h1>";
           //header("location: ../views/AddEvent.php");
             }

      else {
            
                $eid = $_POST['eid'];
                $ename = $_POST['Name'];
                $salary = $_POST['salary'];


                $con = mysqli_connect('127.0.0.1', 'root', '', 'webtechprojectdb');
                $sql = "insert into salary values('{$eid}'  ,  '{$ename}' , '{$salary}')";
                
                if(mysqli_query($con, $sql)){
                  echo "<center><h2><em>Salary Added!</em></h2></center>";
                }
              else
               {
                echo "<center><h2><em>Something Error!</em></h2></center>";
                header("location: ../views/addsalary.php");
               }
             
           }
      }
?>
