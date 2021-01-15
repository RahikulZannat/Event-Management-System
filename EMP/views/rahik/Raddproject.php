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
     $themenameErr = $functionnameErr = $costErr = $Errormsg = "";
     $themename = $functionname = $cost = "";


?>

     <form method = "post" action = "../php/addprojectcheck.php">
  <center>
      <h2>Add Project:</h2>
        <table border="2">
      <tr>
        <td><strong>Theme:</strong> </td>
        <td><input type="text" id="themename" name="themename" value="" onkeyup="themenameValid()">
             <span class = "error" id="THEMENAME">* <?php echo $themenameErr;?></span>
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
          <input type = "submit" name = "submit" value = "Submit">
          <input type="button" onclick="location.href='Rmanageproject.php';" value="Back">
        </td>
      </tr>
    </table>
          <?php echo $Errormsg;?>
      </center>

    </form>

      <script>


    function submitValid(){
      "use strict"

       themenameValid();
       functionnameValid();
       costValid();
    }

  
function themenameValid()
    {
      "use strict"

      var name = document.getElementById('themename').value;
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
            //window.alert("Name can not be null/empty");
            document.getElementById('THEMENAME').innerHTML = "Null submission";

          }else if(!valid){
            //window.alert("Type valid characters!");
            document.getElementById('THEMENAME').innerHTML = "Type valid characters!";
            document.getElementById('themename').value ="";

          }else{
            //window.alert("Name Ok");
            document.getElementById('THEMENAME').innerHTML = "Seems Ok";

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
            //window.alert("Name can not be null/empty");
            document.getElementById('FUNCTIONNAME').innerHTML = "Null submission";
          }else if(!valid){
            //window.alert("Type valid characters!");
            document.getElementById('FUNCTIONNAME').innerHTML = "Type valid characters!";
            document.getElementById('functionName').value ="";
          }else{
            //window.alert("Name Ok");
            document.getElementById('FUNCTIONNAME').innerHTML = "Seems Ok";
          }
      }

function costValid()
    {
      "use strict"

      var cost = document.getElementById('cost').value;

          if(cost == "" || cost == null){
            //window.alert("Name can not be null/empty");
            document.getElementById('COST').innerHTML = "Null submission";
          }else if(cost<=0){
            //window.alert("Type valid characters!");
            document.getElementById('COST').innerHTML = "Type valid number!";
            document.getElementById('cost').value = "";
          }else{
            //window.alert("Name Ok");
            document.getElementById('COST').innerHTML = "Seems Ok";
          }
      }

    
    </script>
  </body>
</html>




  