<?php
	
	$search = $_GET['key'];

	$con = mysqli_connect('127.0.0.1', 'root', '', 'webtechprojectdb');
	$sql = "select * from events where eventname like '%{$search}%'";
	$result = mysqli_query($con, $sql);
	$count =mysqli_num_rows($result);

	//echo $sql;

	if($count > 0){

		$data = " <table border='1' width='50%''>
				    <tr>
				      <td>  <strong>Events</strong>  </td>
				      <td>  <strong>Function Varity</strong></td>
				      <td><strong>Cost</strong></td>
				      <td>  <strong>Action</strong></td>
				   </tr>";

		while($row = mysqli_fetch_assoc($result)){
			$data .= "<tr>
						 
			              <td><strong>{$row['eventname']}</strong></td>
					      <td><em>{$row['functionName']}</em></td>
					      <td>{$row['cost']}</td>
                          <td>
                                       <a href='../php/updateEvent.php?id={$row['eventid']}'>Update</a> /
                                       
                                       <input type='button' value='Delete' onclick='dele({$row['eventid']})'> 
                          </td>
                   </tr>";
		}

		$data .= "</table>";
		echo $data;

	}else{
		echo "No result found!";
	}
?>
