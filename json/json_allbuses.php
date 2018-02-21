<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// 1. connect to your database
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cestar_bus";


$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// 2. make your database query
$sql = "SELECT * FROM bus_from_brampton";

// 3. get the results
$results = mysqli_query($connection, $sql);
if($results == FALSE)
{
	$output = array("message" => "database query fails");

json_encode($output);
exit();

	
}

// 4. create a new associative array to store the results
$buses = [];

// 5. add each row item to the array

while ($i = mysqli_fetch_assoc($results)) {
	$item = array(
	"id" => $i["id"],
	"day_id" => $i["day_id"],
	"dept_time" => $i["dept_time"],
	"dept_loc" => $i["dept_loc"],
	"destination" => $i["destination"]

	);
	array_push($buses,$item);
	
}

echo json_encode($buses);



?>