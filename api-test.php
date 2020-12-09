<?php 
include('config.php');
$response = array();
if($conn){
	$result = mysqli_query($conn,"SELECT * FROM t_profile");
	if($result){
		header("Content-Type: JSON");
		$i=0;
		while($row = mysqli_fetch_array($result)){
			$response[$i]['id'] = $row['id'];
			$response[$i]['name'] = $row['name'];
			$response[$i]['email'] = $row['email'];
			$response[$i]['birthday'] = $row['birthday'];
			$response[$i]['address'] = $row['address'];
			$i++;
		}
		echo json_encode($response,JSON_PRETTY_PRINT);
	}
}
else{
	echo "Database connection failed";
}
?>