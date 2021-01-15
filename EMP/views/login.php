<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>
<center>
	Login Page
</center>
		 
	</h1>

	<hr>
	<form method="post" action="../php/logCheck.php">
		<center>
			<table>
				<tr>
			         <td><strong>Username:</strong> </td> 
				    	<td>
				    		<input type="text" id="uname" name="uname" value="" onkeyup="nameValid()">
				    		 <span class = "error" id="NAME">*</span>
				    	</td>			
			    </tr>
			         <tr>	<h2></h2>
	                    <td><strong>Password:</strong></td>
				         <td>
				         	<input type="password" id="password" name="password" value=""  onkeyup="passwordValid()">
				             <span class = "error" id="PASSWORD">*</span>
				         </td>
				     </tr>
             </table>
            <br>
	<input type="submit" name="submit" value="Submit" >
		</center>
	</form>
	<div id="VIEW"></div>
	<hr>
	<script>

	function nameValid()
    {
      "use strict"

    var name = document.getElementById('uname').value;
        var canContain = " abcdefghijklmnopqrstuvwxyz.ABCDEFGHIJKLMNOPQRSTUVWXYZ-, ";      // range of characters for input
        var nameL = name.length;
        var temp = "";
        var valid = false;

        for(var i=0 ; i<nameL ; i++ ){                                                  
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
            document.getElementById('NAME').innerHTML = "Null submission";
          }else if(!valid){
           // window.alert("Type valid characters!");
           document.getElementById('NAME').innerHTML = "Type valid characters!";
           document.getElementById('uname').value ="";
          }else{
           // window.alert("Name Ok");
            document.getElementById('NAME').innerHTML = "Seems Ok";
          }


        }

 	  function passwordValid(){
            
            	"use strict"
				var password=document.getElementById('password').value;
				var passwordLength=password.length;
				if(password=="" || password==null)
				{
					//window.alert("Password can not be null/empty");
					document.getElementById('PASSWORD').innerHTML = "Password can not be null/empty";				
				}
				else if(password.length<4)
				{
					//window.alert("Password length will be maore than 4 digits");
					document.getElementById('PASSWORD').innerHTML = "Password length will be maore than 4 digits";
				}
				else
				{
					//window.alert("Password ok");
					document.getElementById('PASSWORD').innerHTML = "Password ok";
				}

		}


/*			function ajax(){


			var name = document.getElementById("uname").value;
			var password = document.getElementById("password").value;

			var xhttp = new XMLHttpRequest();	
			xhttp.onreadystatechange = function() {

			    if (this.readyState == 4 && this.status == 200){
			    	document.getElementById('VIEW').innerHTML = this.responseText;
			    	document.getElementById('VIEW').innerHTML = this.responseText;
			    }
			};
			
			xhttp.open("POST", "logCheck.php?uname="+name, true);
			//xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send(); 
		}*/
	</script>


</body>
</html>
