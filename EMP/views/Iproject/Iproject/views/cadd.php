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
    <title>chef list</title>
  </head>
  <body>

<?php
     $nameErr = $ageErr = $expErr = $Errormsg = "";
     $name = $age = $exp = "";


?>

     <form method = "post" action = "../php/chefcheck.php">
  <center>
      <h2>Add Chef:</h2>
        <table border="2">
      <tr>
        <td><strong>NAME:</strong> </td>
        <td><input type="text" id="name" name="name" value="" onkeyup="nameValid()">
             <span class = "error" id="NAME">* <?php echo $nameErr;?></span>
        </td>
      </tr>
      <tr>

      </tr>
      <tr>
        <td><strong>AGE:</strong> </td>
        <td><input type="text" id="age" name="age" value="" onkeyup="ageValid()">
            <span class = "error" id="age">* <?php echo $ageErr;?></span>
        </td>
      </tr>
     <tr>
        <td><strong>EXP:</strong> </td>
        <td><input type="number"  id="exp" name="exp"value="" onkeyup="costValid()">
            <span class = "error" id="exp">* <?php echo $expErr;?></span>
        </td>
      </tr>
      <tr>
        <td colspan=2 align=right>
          <input type = "submit" name = "submit" value = "Submit">
          <input type="button" onclick="location.href='cprofile.php';" value="Back">
        </td>
      </tr>
    </table>
          <?php echo $Errormsg;?>
      </center>

    </form>

      <script>


    function submitValid(){
      "use strict"

       nameValid();
       ageValid();
       expValid();
    }

  
function nameValid()
    {
      "use strict"

      var name = document.getElementById('name').value;
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
            document.getElementById('NAME').innerHTML = "Null submission";

          }else if(!valid){
            //window.alert("Type valid characters!");
            document.getElementById('NAME').innerHTML = "Type valid characters!";
            document.getElementById('name').value ="";

          }else{
            //window.alert("Name Ok");
            document.getElementById('NAME').innerHTML = "Seems Ok";

          }
      }

function ageValid()
    {
      "use strict"

      var age = document.getElementById('age').value;

          if(age == "" || age == null){
            //window.alert("Name can not be null/empty");
            document.getElementById('AGE').innerHTML = "Null submission";
          }else if(age<=0){
            //window.alert("Type valid characters!");
            document.getElementById('AGE').innerHTML = "Type valid number!";
            document.getElementById('age').value = "";
          }else{
            //window.alert("Name Ok");
            document.getElementById('AGE').innerHTML = "Seems Ok";
          }
      }


function expValid()
    {
      "use strict"

      var exp = document.getElementById('exp').value;

          if(exp == "" || exp == null){
            //window.alert("Name can not be null/empty");
            document.getElementById('EXP').innerHTML = "Null submission";
          }else if(exp<=0){
            //window.alert("Type valid characters!");
            document.getElementById('EXP').innerHTML = "Type valid number!";
            document.getElementById('exp').value = "";
          }else{
            //window.alert("Name Ok");
            document.getElementById('EXP').innerHTML = "Seems Ok";
          }
      }

    
    </script>
  </body>
</html>

