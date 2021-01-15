<?php
  session_start();

  if(!isset($_SESSION['uname'])){  
    header("location: login.html");
  }

  require_once('../service/functions.php');
  $id = $_GET['id'];
  $hall =updateHalldata($id);

       $hallnameErr = $eventnameErr = $costErr = $Errormsg = "";
       $hallname = $eventname = $cost = "";

     if ($_SERVER["REQUEST_METHOD"] == "POST") {

          
          if (empty($_POST["eventname"])) {
           $eventnameErr = "Event Name is required";
             }
          if (empty($_POST["placeName"])) {
           $hallnameErr = "Hall Name is required";
          }
          if (empty($_POST["cost"])) {
           $costErr = "Cost is required";
             }
          if (empty($_POST["placeName"]) || empty($_POST["eventname"]) || empty($_POST["cost"])) {
                    $Errormsg = "<center><h1>Missing Something</h1></center>";
              }

         else {
                  $eventname = $_POST['eventname'];
                  $hallname = $_POST['placeName'];
                  $cost = $_POST['cost'];

                
                  $con = mysqli_connect('127.0.0.1', 'root', '', 'webtechprojectdb');
                  $sql ="UPDATE eventplace join pakage SET eventname='{$eventname}', placeName='{$hallname}', cost='{$cost}' WHERE eventplace.eventid=pakage.eventid and     placeid='{$GLOBALS['id']}'";


                  if(mysqli_query($con, $sql)){
                    echo "<center><h2><em>Hall Updated!</em></h2></center>";
                  }else{
                    echo "Error";
                  }
              }
      }

?>

<!DOCTYPE html>
<html>
<head>
  <title>Update hall Data</title>
</head>
<body>
<center><h2>Update Hall Data</h2></center>  
  <form action="" method="post">
    <center>
    <table border="2" width="50%" height= "50px">
      <tr>
        <td>Event Name:</td>
        <td><input type="text" size="40" id="eventname" onkeyup="eventnameValid()" name="eventname" value="<?=$hall['eventname']?>">
            <span class = "error" id="EVENTNAME">* <?php echo $eventnameErr;?></span>
        </td>
      </tr>

      <tr>
        <td>Place Name :</td>
        <td><input type="text" size="45" id="placeName" onkeyup="placeNameValid()" name="placeName" value="<?=$hall['placeName']?>">
            <span class = "error" id="PLACENAME">* <?php echo $hallnameErr;?></span>
        </td>
      </tr>
      <tr>
        <td>Cost:</td>
        <td><input type="text" id="cost" onkeyup="costValid()" name="cost" value="<?=$hall['cost']?>">
            <span class = "error" id="COST">* <?php echo $costErr;?></span>
        </td>
      </tr>

      <tr>
        
        <td colspan="2" align="right">
          <a href="../views/HallSuggestion.php">Back</a>
          <input type="submit" name="update" value="update"></td>
      </tr>
    </table>
            <?php echo $Errormsg;?>
    </center>
  </form>

    <script>

  
function eventnameValid()
    {
      "use strict"

      var name = document.getElementById('eventname').value;
        var canContain = " abcdefghijklmnopqrstuvwxyz.ABCDEFGHIJKLMNOPQRSTUVWXYZ-, ";      // range of characters for input
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

function placeNameValid()
    {
      "use strict"

      var name = document.getElementById('placeName').value;
        var canContain = " abcdefghijklmnopqrstuvwxyz.ABCDEFGHIJKLMNOPQRSTUVWXYZ-, ";      // range of characters for input
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
            document.getElementById('PLACENAME').innerHTML = "Null submission";
          }else if(!valid){
            //window.alert("Type valid characters!");
            document.getElementById('PLACENAME').innerHTML = "Type valid characters!";
            document.getElementById('placeName').value ="";
          }else{
           // window.alert("Function Name Ok");
            document.getElementById('PLACENAME').innerHTML = "Seems Ok";
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



