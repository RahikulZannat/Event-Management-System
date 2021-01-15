<?php

	require('db.php');

	function validate($username, $password){

		$con = getConnection();
		$sql = "select * from employee  where username='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}


	function getAllUsers(){
		$con = getConnection();
		$sql = "select * from employee";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function  getallevents(){ 
		$con = getConnection();
		$sql = "SELECT * FROM events";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function  getAlleventplace(){ 
		$con = getConnection();
		$sql = "SELECT eventname,placeName,cost,placeid FROM eventplace JOIN pakage WHERE pakage.eventid=eventplace.eventid";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getCostingDetails(){
		$con = getConnection();
		$sql = "SELECT events.eventname,functionName,cost,pakageCost,pakageDiscount FROM events JOIN pakage WHERE events.eventname=pakage.eventname";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	
    function  getEmployee(){ 
		$con = getConnection();
		$sql = "SELECT * from employee join login WHERE employee.eid=login.eid";
		$result = mysqli_query($con, $sql);
		return $result;
	}
	function  getmyself(){ 
		$con = getConnection();
		$sql = "SELECT * from employee join login WHERE employee.eid=login.eid and username like 'Nafiz' ";
		$result = mysqli_query($con, $sql);
		return $result;
	}

    function  getBooking(){ 
		$con = getConnection();
		$sql = "SELECT booking.bookid,customer.eventname,booking.date,customer.username,customer.contactNo FROM booking JOIN customer WHERE booking.cid=customer.cid";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function  geBookedHall(){ 
		$con = getConnection();
		$sql = "SELECT booking.bookid,customer.eventname,booking.date,customer.username,customer.contactNo,booking.placeName FROM booking JOIN customer WHERE customer.cid=booking.cid";
		$result = mysqli_query($con, $sql);
		return $result;
	}
   
    function  getAssignEmployee(){ 
		$con = getConnection();
		$sql = "SELECT booking.bookid,customer.eventname,booking.date,customer.username,customer.contactNo, booking.photographer,booking.catering,eventplace.placeName from    booking INNER JOIN eventplace on booking.placeid=eventplace.placeid INNER JOIN customer on booking.cid=customer.cid";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function deleteUser($id){
		$con = getConnection();
		$sql = "DELETE FROM employee WHERE eid = $id";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function deleteEvent($id){
		$con = getConnection();
		$sql = "DELETE FROM events WHERE eventid = $id";
		$result = mysqli_query($con, $sql);
		return $result;
	}
    
    function deleteHall($id){
		$con = getConnection();
		$sql = "DELETE FROM eventplace WHERE placeid = $id";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getUserDataById($id){
		$con = getConnection();
		$sql = "SELECT * from employee WHERE eid = $id";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}

	function updateUserData($sql){
		$con = getConnection();
		$result = mysqli_query($con, $sql);

		return $result;
	}

	function updateEventdata($id){
		$con = getConnection();
		$sql = "SELECT * from events WHERE eventid = $id";
		$result = mysqli_query($con, $sql);
		$event = mysqli_fetch_assoc($result);

		return $event;
	}

	function updateHalldata($id){
		$con = getConnection();
		$sql = "SELECT pakage.eventname,eventplace.placeName,eventplace.cost from eventplace INNER JOIN pakage WHERE eventplace.eventid=pakage.eventid and 
		        eventplace.placeid=$id";
		$result = mysqli_query($con, $sql);
		$event = mysqli_fetch_assoc($result);

		return $event;
	}

	function updateBooking($id){
		$con = getConnection();
		$sql = "SELECT * from booking inner join customer on bookid = $id inner join eventplace on booking.placeid=eventplace.placeid";
		$result = mysqli_query($con, $sql);
		$event = mysqli_fetch_assoc($result);

		return $event;
	}

	function updatePersonalinfo($id){
		$con = getConnection();
		$sql = "SELECT * from employee  WHERE eid = $id";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}




	//rahik database
		function  getALLprojects(){ 
		$con = getConnection();
		$sql = "SELECT * FROM projects";
		$result = mysqli_query($con, $sql);
		return $result;
	}

function  getALLsalary(){ 
		$con = getConnection();
		$sql = "SELECT * FROM salary";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function deleteprojects($id){
		$con = getConnection();
		$sql = "DELETE FROM projects WHERE projectid = $id";
		$result = mysqli_query($con, $sql);
		return $result;
	}
	function deletesalary($id){
		$con = getConnection();
		$sql = "DELETE FROM salary WHERE eid = $id";
		$result = mysqli_query($con, $sql);
		return $result;
	}
///////paul database

///efty
		function getAllchef(){
		$con = getConnection();
		$sql = "select * from chef";
		$result = mysqli_query($con, $sql);
		return $result;
	}


?>
