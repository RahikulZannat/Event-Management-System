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
    <title>Add Salary</title>
  </head>
  <body>

<?php
     $eidErr = $enameErr = $salaryErr = $Errormsg = "";
     $eid = $ename = $salary = "";

?>

     <form method = "post" action = "../php/salarycheck.php">
  <center>
      <h2>Add salary:</h2>
        <table border="2">
      <tr>
        <td><strong>EID:</strong> </td>
        <td><input type="text" id="eid" name="eid" value="" onkeyup="eidValid()">
             <span class = "error" id="EID">* <?php echo $eidErr;?></span>
        </td>
      </tr>
      <tr>

      </tr>
      <tr>
        <td><strong>Position:</strong> </td>
        <td><input type="text" id="ename" name="Name" value="" onkeyup="enameValid()">
            <span class = "error" id="ENAME">* <?php echo $enameErr;?></span>
        </td>
      </tr>
     <tr>
        <td><strong>Salary:</strong> </td>
        <td><input type="number"  id="salary" name="salary" value="" onkeyup="salaryValid()">
            <span class = "error" id="SALARY">* <?php echo $salaryErr;?></span>
        </td>
      </tr>
      <tr>
        <td colspan=2 align=right>
          <input type="submit" name="submit" value="Submit">
          <input type="button" onclick="location.href='Rsalary.php';" value="Back">
        </td>
      </tr>
    </table>
          <?php echo $Errormsg;?>
      </center>

    </form>

      <script>

  
function eidValid()
    {
      "use strict"

          var id = document.getElementById('eid').value;

          if(id == "" || id == null){
            //window.alert("Name can not be null/empty");
            document.getElementById('EID').innerHTML = "Null submission";
          }
          else{
            //window.alert("Name Ok");
            document.getElementById('EID').innerHTML = "Seems Ok";
      }

function enameValid()
    {
      "use strict"

      var name = document.getElementById('ename').value;
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
            document.getElementById('ename').innerHTML = "Null submission";
          }else if(!valid){
            //window.alert("Type valid characters!");
            document.getElementById('ENAME').innerHTML = "Type valid characters!";
            document.getElementById('ename').value ="";
          }else{
            //window.alert("Name Ok");
            document.getElementById('ENAME').innerHTML = "Seems Ok";
          }
      }

function salary()
    {
      "use strict"

      var salary = document.getElementById('salary').value;

          if(salary == "" || salary == null){
            //window.alert("Name can not be null/empty");
            document.getElementById('SALARY').innerHTML = "Null submission";
          }else if(salary<=0){
            //window.alert("Type valid characters!");
            document.getElementById('SALARY').innerHTML = "Type valid number!";
            document.getElementById('salary').value = "";
          }else{
            //window.alert("Name Ok");
            document.getElementById('SALARY').innerHTML = "Seems Ok";
          }
      }

    
    </script>
  </body>
</html>




  