<?php
	session_start();

		$uname = $_POST['uname'];
		$password =  $_POST['password'];
		$status ='';


include('../service/functions.php');

	//if( isset($_REQUEST['submit'])){
	//	$uname = $_REQUEST['uname'];
	//	$password =  $_REQUEST['password'];


		if(empty(trim($uname)) || empty(trim($password))){
			print("<center><h2>Null submission found!</h2></center>");
		}

		else{

	    	$user = validate($uname, $password);

				if(count($user) > 0 ){
				$_SESSION['uname'] = $uname;
				$_SESSION['pass'] = $password;

				if( $uname =='Nafiz'){

				   header("location: ../views/home.php");
				}

				if(  $uname =='Rahik'){

				  header("location: ../views/Admininterface.php");
				}

				if(  $uname =='Paul'){

				  header("location: ../views/PhotographerAdmininterface.php");
				}
		
				if(  $uname =='Efty'){

				  header("location: ../views/adminui.php");
				}
			}else{
				echo "invalid uname/password";
			}
		}

	//}
?>
