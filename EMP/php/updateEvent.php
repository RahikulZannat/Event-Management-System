<?php
  session_start();

  if(!isset($_SESSION['uname'])){  
    header("location: login.html");
  }

  require_once('../service/functions.php');
  $id = $_GET['id'];
  $event = updateEventdata($id);

       $eventnameErr = $functionNameErr = $costErr = $Errormsg = "";
       $eventname = $functionName = $cost = "";

      $eventnameErr = $functionNameErr = $costErr = $Errormsg = "";
       $eventname = $functionName = $cost = "";

     if ($_SERVER["REQUEST_METHOD"] == "POST") {


          if (empty($_POST["eventname"])) {
           $eventnameErr = "Event Name is required";
          }

          if (empty($_POST["functionName"])) {
           $functionNameErr = "Function Name is required";
             }
          if (empty($_POST["cost"])) {
           $costErr = "Cost is required";
             }
          if (empty($_POST["eventname"]) || empty($_POST["functionName"]) || empty($_POST["cost"])) {
                    $Errormsg = "<h1>Missing Something</h1>";
              }

         else {
                  
                  $eventname = $_POST['eventname'];
                  $functionName = $_POST['functionName'];
                  $cost = $_POST['cost'];

                
                  $con = mysqli_connect('127.0.0.1', 'root', '', 'webtechprojectdb');
                  $sql ="UPDATE events SET eventname='{$eventname}', functionName='{$functionName}', cost='{$cost}' WHERE eventid='{$GLOBALS['id']}'";


                  if(mysqli_query($con, $sql)){
                    echo "<center><h2><em>Event Updated!</em></h2></center>";
                  }else{
                    echo "Error";
                  }
              }
      }


?>

<!DOCTYPE html>
<html>
<head>
  <title>Update Data</title>
</head>
<body>
<center><h2>Update Event Data</h2></center>  
  <form action="" method="post">
    <center>
    <table border="2" width="50%" height= "50px">
      <tr>
        <td>Event:</td>
        <td><input type="text" size="40" id="eventname" onkeyup="eventnameValid()" name="eventname" value="<?=$event['eventname']?>">
            <span class = "error" id="EVENTNAME">* <?php echo $eventnameErr;?></span>
        </td>
      </tr>

      <tr>
        <td>Function :</td>
        <td><input type="text" size="45" id="functionName" onkeyup="functionnameValid()" name="functionName" value="<?=$event['functionName']?>">
            <span class = "error" id="FUNCTIONNAME">* <?php echo $functionNameErr;?></span>
        </td>
      </tr>
      <tr>
        <td>Cost:</td>
        <td><input type="text" id="cost" onkeyup="costValid()" name="cost" value="<?=$event['cost']?>">
            <span class = "error" id="COST">* <?php echo $costErr;?></span>
        </td>
      </tr>

      <tr>
        
        <td colspan="2" align="right">
          <a href="../views/EventList.php">Back</a>
          <input type="submit" name="update"  value="update"></td>
      </tr>
    </table>
            <?php echo $Errormsg;?>
    </center>
  </form>

    <script>


    function submitValid(){
      "use strict"

       eventnameValid();
       functionnameValid();
       costValid();
    }

  
function eventnameValid()
    {
      "use strict"

      var name = document.getElementById('eventname').value;
        var canContain = " abcdefghijklmnopqrstuvwxyz.ABCDEFGHIJKLMNOPQRSTUVWXYZ-";      // range of characters for input
        var nameL = name.length;
        var temp = "";
        var valid = false;

        for(var i=0 ; i<nameL ; i++ ){                                                  // one by one input characters checking
          temp = name.charAt(i);
          var matchCheck = 0;

          for(var j=0 ; j<canContain.length ; j++){
            
            if(temp == canContain.charAt(j)){
              matchCheck = 1;
            }
          }
          if(matchCheck == 1){
            valid = true;
          }else if(matchCheck == 0){
            valid = false;
            break;
          }else{
            window.alert("ERROR");
          }
        }
          if(name == "" || name == null){
            //window.alert("Event Name can not be null/empty");
            document.getElementById('EVENTNAME').innerHTML = "Null submission";
          }else if(!valid){
           // window.alert("Type valid characters!");
            document.getElementById('eventname').value ="";
           document.getElementById('EVENTNAME').innerHTML = "Type valid characters!";
          }else{
           // window.alert("Name Ok");
            document.getElementById('EVENTNAME').innerHTML = "Seems Ok";
          }
      }

function functionnameValid()
    {
      "use strict"

      var name = document.getElementById('functionName').value;
        var canContain = " abcdefghijklmnopqrstuvwxyz.ABCDEFGHIJKLMNOPQRSTUVWXYZ-";      // range of characters for input
        var nameL = name.length;
        var temp = "";
        var valid = false;

        for(var i=0 ; i<nameL ; i++ ){                                                  // one by one input characters checking
          temp = name.charAt(i);
          var matchCheck = 0;

          for(var j=0 ; j<canContain.length ; j++){
            
            if(temp == canContain.charAt(j)){
              matchCheck = 1;
            }
          }
          if(matchCheck == 1){
            valid = true;
          }else if(matchCheck == 0){
            valid = false;
            break;
          }else{
            window.alert("ERROR");
          }
        }
          if(name == "" || name == null){
           // window.alert("Function Name can not be null/empty");
            document.getElementById('FUNCTIONNAME').innerHTML = "Null submission";
          }else if(!valid){
            //window.alert("Type valid characters!");
            document.getElementById('FUNCTIONNAME').innerHTML = "Type valid characters!";
            document.getElementById('functionName').value ="";
          }else{
           // window.alert("Function Name Ok");
            document.getElementById('FUNCTIONNAME').innerHTML = "Seems Ok";
          }
      }

function costValid()
    {
      "use strict"

      var cost = document.getElementById('cost').value;

          if(cost == "" || cost == null){
            //window.alert("Cost can not be null/empty");
            document.getElementById('COST').innerHTML = "Null submission";
          }else if(cost<=0){
            //window.alert("Type valid number!");
            document.getElementById('cost').value ="";
            document.getElementById('COST').innerHTML = "Type valid number!";
          }else{
            //window.alert("Cost Ok");
             document.getElementById('COST').innerHTML = "Seems Ok";
          }
      }

    
    </script>
</body>
</html>


