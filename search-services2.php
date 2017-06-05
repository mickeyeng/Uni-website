<?php
include "db_handler.php";

$request = mysqli_real_escape_string($conn, $_POST["query"]);
$query = "
 SELECT * FROM services WHERE service_name LIKE '%".$request."%'
";

$result = mysqli_query($conn,$query);

$data = array();

if(mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		$data[] = $row['service_name'];
	}

	echo json_encode($data);
}