<?php
session_start();
date_default_timezone_set("America/New_York");
// do the SQL Connection
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cestar_bus";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
$now = new DateTime();
$from = $_POST["from"];
$to = $_POST["to"];
if($to == $from){
	  header("Location: " . "menu.php");
    exit();
}
if($to =="Mississauga" && $from == "Brampton"){
	  header("Location: " . "menu.php");
    exit();
}
if($to =="Brampton" && $from == "Mississauga"){
	  header("Location: " . "menu.php");
    exit();
}



$dayid = date("N");   // 2 for tue
if ($dayid == 7)
{
	$dayid = 1;
}

// echo "Today Is : " . $dayid;
	$sql = "SELECT * FROM bus_from_brampton where   dept_loc='".$from."' and destination='".$to."' and day_id = '" . $dayid . "' Order BY dept_time ASC " ;
	
	$result_bus = mysqli_query($connection, $sql);
	
		foreach($result_bus as $bus_data){
			
		$data_date =  new DateTime($bus_data['dept_time']);

		if($data_date<=$now) {
			}
			else {
					
			break 1;
}
		}

if ($bus_data == FALSE) {
  //echo "Database query failed. <br/>";
  //echo "SQL command: " . $sql;
  //exit();
  
  $day_id = $day_id +1;
  echo $day_id;
  $sql = "SELECT * FROM bus_from_brampton where   dept_loc='".$from."' and destination='".$to."' and day_id = '" . $day_id . "' Order BY dept_time ASC LIMIT 1" ;
	
	$result_bus = mysqli_query($connection, $sql);
	
		$bus_data = [];
		$bus_data["id"] = $result_bus["id"];
		$bus_data["day_id"] = $result_bus["day_id"];
		$bus_data["dept_time"] = $result_bus["dept_time"];
		$bus_data["dept_loc"] = $result_bus["dept_loc"];
		$bus_data["destination"] = $result_bus["destination"];
		
		
		
  
}


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/spectre.min.css">
    <link rel="stylesheet" href="css/spectre-exp.min.css">
    <link rel="stylesheet" href="css/spectre-icons.min.css">
	<style type="text/css">
		header {
			max-width:960px;
			margin:0 auto;
			margin-top:40px;
		}
		footer {
			max-width:960px;
			margin:0 auto;
			margin-top:40px;	
		}
		div.container {
			margin-top:40px;
		}
		h1 {
			font-size:24px;
		}
		h2 {
			font-size:20px;
		}
	</style>
  </head>
<body>
	<header class="navbar">
	 
		 <section class="navbar-center">
		<a href="index.php"><img src="https://www.lambtoncollege.ca/images/header/Logo.png" style="max-width:300px; margin-left:500px"></a>
	  

	  </section>
	</header>	

	<div class="container">
	  <div class="columns">
		<div class="column col-6 centered">
		<!-- form input control -->
<form class="form-group" method="Post" action="#">

  <div class="form-group">
   <?php
echo "<h1> Day : " . $bus_data["day_id"] ."  Next Bus from  " .$bus_data["dept_loc"]. " to  ".  $bus_data["destination"] .  " is at " . $bus_data["dept_time"] . "</h1>";


?>
</div>
 
			</div>
		
	  </div>
	</div> <!-- // container -->
  
	  <footer style="margin-top:250px ;margin-left:600px;">
      &copy; <?php echo date("Y") ?> Cestar College
    </footer>
  
 </body>
 </html>