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
    <title>Add Album</title>
  </head>
  <body>

<?php
     $theme_nameErr = $function_nameErr = $costErr = $Errormsg = "";
     $theme_name = $function_name = $cost = "";



?>

     <form method = "post" action = "../php/Paddalbum.php">
  <center>
      <h2>Add Album:</h2>
        <table border="2">
      <tr>
        <td><strong>Album:</strong> </td>
        <td><input type="text" id="theme_name" name="theme_name" value="" onkeyup="theme_nameValid()">
             <span class = "error" id="THEME_NAME">* <?php echo $theme_nameErr;?></span>
        </td>
      </tr>
      <tr>

      </tr>
      <tr>
        <td><strong>Function_name:</strong> </td>
        <td><input type="text" id="function_name" name="function_name" value="" onkeyup="function_nameValid()">
            <span class = "error" id="FUNCTION_NAME">* <?php echo $function_nameErr;?></span>
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
          <input type="button" onclick="location.href='managealbum.php';" value="Back">
        </td>
      </tr>
    </table>
          <?php echo $Errormsg;?>
      </center>

    </form>

      <script>


    function submitValid(){
      "use strict"

       theme_nameValid();
       function_nameValid();
       costValid();
    }

  
function theme_nameValid()
    {
      "use strict"

      var name = document.getElementById('theme_name').value;
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
          if(name == "" || theme_name == null){
            //window.alert("Name can not be null/empty");
            document.getElementById('THEME_NAME').innerHTML = "Null submission";

          }else if(!valid){
            //window.alert("Type valid characters!");
            document.getElementById('THEME_NAME').innerHTML = "Type valid characters!";
            document.getElementById('theme_name').value ="";

          }else{
            //window.alert("Name Ok");
            document.getElementById('THEME_NAME').innerHTML = "Seems Ok";

          }
      }

function function_nameValid()
    {
      "use strict"

      var name = document.getElementById('function_name').value;
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
            document.getElementById('FUNCTION_NAME').innerHTML = "Null submission";
          }else if(!valid){
            //window.alert("Type valid characters!");
            document.getElementById('FUNCTION_NAME').innerHTML = "Type valid characters!";
            document.getElementById('function_name').value ="";
          }else{
            //window.alert("Name Ok");
            document.getElementById('FUNCTION_NAME').innerHTML = "Seems Ok";
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




  