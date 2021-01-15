<?php
	session_start();

	if(!isset($_SESSION['uname'])){  
		header("location: login.html");
	}

	//require('../service/db.php');
	require_once('../service/functions.php');
	$id = $_GET['id'];
	$booking = updateBooking($id);

					$eventnameErr = $nameErr = $photoErr = $cateringErr = $contactNoErr = $placeErr = $Errormsg ="";
					 $eventname = $name = $date = $photo = $catering = $contactNo = $place ="";													

		if ($_SERVER["REQUEST_METHOD"] == "POST") {

					if (empty($_POST["eventname"])) {
								 $eventnameErr = "Username is required";
							      }
					if (empty($_POST["username"])) {
						 $nameErr = "Username is required";
				        }
				    if (empty($_POST["contactNo"])) {
						   $contactNoErr = "Contact is required";
						 }
					if (empty($_POST["placeName"])) {
						 $placeErr = "Place Name is required";
						 }
					if (empty($_POST["catering"])) {
				   	 $cateringErr = "Name is required";
					 }
					if (empty($_POST["eventname"]) || empty($_POST["username"]) || empty($_POST["contactNo"]) || empty($_POST["placeName"]))
					 {
					   $Errormsg = "<center><h1>Missing Something</h1></center>";
					 }

	           else {
					    	$eventname = $_POST['eventname'];
							$date = $_POST['date'];
							$name = $_POST['username'];
							$contactNo = $_POST['contactNo'];
							$photographer = $_POST['photographer'];
							$catering = $_POST['catering'];
							$place = $_POST['placeName'];
						
							$con = mysqli_connect('127.0.0.1', 'root', '', 'webtechprojectdb');
							$sql ="UPDATE booking inner join customer on booking.cid=customer.cid inner join eventplace  on booking.placeid=eventplace.placeid SET 
									eventname='{$eventname}', booking.date='{$date}',customer.username='{$name}',
									customer.contactNo='{$contactNo}', booking.photographer='{$photographer}' , eventplace.placeName='{$place}' ,booking.catering='{$catering}' WHERE booking.bookid='{$GLOBALS['id']}'";



							if(mysqli_query($con, $sql)){
								echo "<center><h2><em>Information Updated!</em></h2></center>";
							}else{
								echo "<center><h2><em>Error!</em></h2></center>";
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
	<center><h2>Update Booking Data</h2></center>
	<form action="" method="post">
		<table border="2" align="center" width="50%">
			<tr>
				<td>Event Name:</td>
				<td><input type="text" id="eventname" onkeyup="eventnameValid()" name="eventname" size="40%" value="<?=$booking['eventname']?>">
					 <span class = "error" id="EVENTNAME">* <?php echo $eventnameErr;?></span>
				</td>
			</tr>
			<tr>
				<td>Date:</td>
				<td><input type="date" name="date"  value="<?=$booking['date']?>"></td>
			</tr>
			<tr>
				<td>Customer Name:</td>
				<td><input type="text" id="name" onkeyup="nameValid()" name="username" size="40%" value="<?=$booking['username']?>">
					<span class = "error" id="NAME">* <?php echo $nameErr;?></span>
				</td>
			</tr>
			<tr>
				<td>Contact No:</td>
				<td><input type="text" id="contact" name="contactNo" onkeyup="contactValid()" size="40%" value="<?=$booking['contactNo']?>">
					 <span class = "error" id="CONTACT">* <?php echo $contactNoErr;?></span>
				</td>
			</tr>
		   	<tr>
				<td>Photographer:</td>
				<td><input type="text" id="photographer" onkeyup="photographerValid()" name="photographer" size="40%" value="<?=$booking['photographer']?>">
					<span class = "error" id="PHOTO">* <?php echo $photoErr;?></span>
				</td>
			</tr>
			<tr>
				<td>Catering:</td>
				<td><input type="text" id="catering" onkeyup="cateringValid()" name="catering" size="40%" value="<?=$booking['catering']?>">
					<span class = "error" id="CATERING">* <?php echo $cateringErr;?></span>
				</td>
			</tr>
			<tr>
				<td>Place:</td>
				<td><input type="text" id="placeName" onkeyup="placeNameValid()" name="placeName" size="40%" value="<?=$booking['placeName']?>">
					<span class = "error" id="PLACENAME">* <?php echo $placeErr;?></span>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<a href="AssignEmployee.php">Back</a>
					<input type="submit" name="update" value="update">
				</td>
				
			</tr>
		</table>
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
           document.getElementById('EVENTNAME').innerHTML = "Type valid characters!";
           document.getElementById('eventname').value ="";
          }else{
           // window.alert("Name Ok");
            document.getElementById('EVENTNAME').innerHTML = "Seems Ok";
          }
      }

  function nameValid()
		{
			"use strict"

		var name = document.getElementById('name').value;
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
            document.getElementById('NAME').innerHTML = "Null submission";
          }else if(!valid){
           // window.alert("Type valid characters!");
           document.getElementById('NAME').innerHTML = "Type valid characters!";
           document.getElementById('name').value ="";
          }else{
           // window.alert("Name Ok");
            document.getElementById('NAME').innerHTML = "Seems Ok";
          }


        }

	function contactValid(){
			"use strict"

			var contact = document.getElementById('contact').value;
   			//var contact = prompt("enter the num");
   			var canContain = "+0123456789";
   			var chk=contact.slice(1,contact.length);
   			var temp = ""; 
  			var valid = false;

  				for(var i=0 ; i<contact.length ; i++ ){                                                  // one by one input characters checking
  				temp = contact.charAt(i);
  				var matchCheck = 0;

  				for(var j=0 ; j<canContain.length ; j++){
  					
  					if(temp == canContain.charAt(j)){
  						matchCheck = 1;
  					}
  				}
  				for(var k=0 ; k<chk.length ;k++){
  					if(chk.charAt(k)=='+')
  					{
  						matchCheck = 0;
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
  				if(contact == "" || contact == null){
				//window.alert("Contact null submission");
				document.getElementById('CONTACT').innerHTML = "Null/Blank Submission.";
				}
				else if(!valid){
				//window.alert("Type valid number!");
				document.getElementById('CONTACT').innerHTML = "Type valid number!";
				document.getElementById('contact').value ="";
				}
				else{
					//window.alert("number ok");
					document.getElementById('CONTACT').innerHTML = "Contact number ok";
				}			
	}

function photographerValid()
    {
      "use strict"

      var name = document.getElementById('photographer').value;
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
            document.getElementById('PHOTO').innerHTML = "Null submission";
          }else if(!valid){
           // window.alert("Type valid characters!");
           document.getElementById('PHOTO').innerHTML = "Type valid characters!";
           document.getElementById('photographer').value ="";
          }else{
           // window.alert("Name Ok");
            document.getElementById('PHOTO').innerHTML = "Seems Ok";
          }
      }

 function cateringValid()
    {
      "use strict"

      var name = document.getElementById('catering').value;
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
            document.getElementById('CATERING').innerHTML = "Null submission";
          }else if(!valid){
           // window.alert("Type valid characters!");
           document.getElementById('CATERING').innerHTML = "Type valid characters!";
           document.getElementById('catering').value ="";
          }else{
           // window.alert("Name Ok");
            document.getElementById('CATERING').innerHTML = "Seems Ok";
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

    
    </script>
	

</body>
</html>



