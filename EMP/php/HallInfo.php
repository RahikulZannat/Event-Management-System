<?php

	$search = $_GET['key'];

	$con = mysqli_connect('127.0.0.1', 'root', '', 'webtechprojectdb');
	$sql = "SELECT * from eventplace INNER JOIN pakage on pakage.eventid=eventplace.eventid and pakage.eventname LIKE '%{$search}%'";
	$result = mysqli_query($con, $sql);
	$count =mysqli_num_rows($result);

	//echo $sql;

	if($count > 0){

					$data = "<table border='2' width='60%'>
								    <tr>
								      <td>  <strong>Events</strong>  </td>
								      <td>  <strong>Suggested Place</strong></td>
								      <td>  <strong>Cost</strong></td>
								      <td>  <strong>Action</strong></td>
								   </tr>";

		while($row = mysqli_fetch_assoc($result)){
			$data .= "   <tr>
						      <td><strong>{$row['eventname']}</strong></td>
						      <td><strong>{$row['placeName']}</strong></td>
						      <td>{$row['cost']}</td>
						      <td>
						          <a href='../php/updateHall.php?id={$row['placeid']}''>Update</a> /
						          
						          <input type='button' value='Delete' onclick='dele({$row['placeid']})'>
						      </td>
						  </tr>";
		}

		$data .= "</table>";
		echo $data;

	}else{
		echo "No result found!";
	}
?>

