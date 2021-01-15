<?php
	session_start();
	if(!isset($_SESSION['uname'])){
		header("location: login.php");
	}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add Event</title>
  </head>
  <body>

<?php
     $eventnameErr = $functionnameErr = $costErr = $Errormsg = "";
     $eventname = $functionname = $cost = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {


           if (empty($_POST["eventname"])) {
           $eventnameErr = "Event Name is required";
          }

          if (empty($_POST["functionName"])) {
           $functionnameErr = "Function Name is required";
             }
          if (empty($_POST["cost"])) {
           $costErr = "Cost is required";
             }
         if (empty($_POST["cost"]) || empty($_POST["eventname"]) || empty($_POST["functionName"])) {
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
                echo "Something Error";
               }
             
           }
      }
/*<form method = "post" action = "../php/addEventCheck.php">*/
?>

    <form method = "post" action = "<?php
     echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <center>
      <h2 id="VIEW">Add Event:</h2>

        <table border="2">
      <tr>
        <td><strong>Event:</strong> </td>
        <td><input type="text" id="eventname" name="eventname" value="" onkeyup="eventnameValid()">
             <span class = "error" id="EVENTNAME">* <?php echo $eventnameErr;?></span>
        </td>
      </tr>
      <tr>

      </tr>
      <tr>
        <td><strong>Function:</strong> </td>
        <td><input type="text" id="functionName" name="functionName" value="" onkeyup="functionnameValid()">
            <span class = "error" id="FUNCTIONNAME">* <?php echo $functionnameErr;?></span>
        </td>
      </tr>
     <tr>
        <td><strong>Cost:</strong> </td>
        <td><input type="number"  id="cost" name="cost"value="" onkeyup="costValid()">
            <span class = "error" id="COST">* <?php echo $costErr;?></span>
        </td>
      </tr>
      <tr>
        <td colspan=2 align=right>
          <input type = "submit" name = "submit" id="submit" value = "Submit">
          <input type="button" onclick="location.href='Eventlist.php';" value="Back">
        </td>
      </tr>
    </table>
          <?php echo $Errormsg;?>
      </center>

    </form>

      <script>

/*function submitValid(){

  if( (eventnameValid() == false) || (functionnameValid() == false) || (costValid() == false))
  {
    alert ("Missing Something");
  }
  else
  {
    alert("ok");
      var xhttp = new XMLHttpRequest(); 
      
      xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200){
            document.getElementById('VIEW').innerHTML = this.responseText;
          }
      };
      
      xhttp.open("POST", "../php/addEventCheck.php", true);
      xhttp.send();
    
    $.post
    
  }

      

}*/
 
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
            return false;
          }
        }
          if(name == "" || name == null){
            //window.alert("Name can not be null/empty");
            document.getElementById('EVENTNAME').innerHTML = "Null submission";
            return false;

          }else if(!valid){
            //window.alert("Type valid characters!");
            document.getElementById('EVENTNAME').innerHTML = "Type valid characters!";
            document.getElementById('eventname').value ="";
            return false;

          }else{
            //window.alert("Name Ok");
            document.getElementById('EVENTNAME').innerHTML = "Seems Ok";
            return true;

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
            return false;
          }
        }
          if(name == "" || name == null){
            //window.alert("Name can not be null/empty");
            document.getElementById('FUNCTIONNAME').innerHTML = "Null submission";
            return false;
          }else if(!valid){
            //window.alert("Type valid characters!");
            document.getElementById('FUNCTIONNAME').innerHTML = "Type valid characters!";
            document.getElementById('functionName').value ="";
            return false;
          }else{
            //window.alert("Name Ok");
            document.getElementById('FUNCTIONNAME').innerHTML = "Seems Ok";
            return true;
          }
      }

function costValid()
    {
      "use strict"

      var cost = document.getElementById('cost').value;

          if(cost == "" || cost == null){
            //window.alert("Name can not be null/empty");
            document.getElementById('COST').innerHTML = "Null submission";
            return false;
          }else if(cost<=0){
            //window.alert("Type valid characters!");
            document.getElementById('COST').innerHTML = "Type valid number!";
            document.getElementById('cost').value = "";
            return false;
          }else{
            //window.alert("Name Ok");
            document.getElementById('COST').innerHTML = "Seems Ok";
            return true;
          }
      }

    
    </script>
  </body>
</html>




  