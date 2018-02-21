<?php
if (isset($_GET["id"]) == FALSE) {
  // missing an id parameters, so
  // redirect person back to add employee page
  header("Location: " . "showallbuses.php");
  exit();
}

$id = $_GET["id"];

// get the item from the database, just like show
// do the SQL
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
$sql =  "SELECT * from bus_from_brampton";
$sql .= " WHERE id='" . $id . "'";

$result = mysqli_query($connection, $sql);

if ($result == FALSE) {
  echo "Database query failed. <br/>";
  echo "SQL command: " . $sql;
  exit();
}

// it's different! you only need to get 1 person, so no loop!
$bus = mysqli_fetch_assoc($result);
// check for a POST request

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // get items from DATABASE
  $bus = [];
  $bus["day_id"] = $_POST['day_id'];
  $bus["dept_time"] = $_POST['dept_time'];
  $bus["dept_loc"] = $_POST['dept_loc'];
$bus["destination"] = $_POST['destination'];
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
	  <section class="navbar-section">
		<h1> Update </h1>

	  </section>
	  <section class="navbar-center">
		<a href="index.php"><img src="https://www.lambtoncollege.ca/images/header/Logo.png" style="max-width:128px;"></a>
	  </section>
	  <section class="navbar-section">
		
		
	  </section>
	</header>	

	<div class="container">
	  <div class="columns">
		<div class="column col-6 centered">
		<!-- form input control -->
<form class="form-group" method="Post" action="updatebus.php">
  <label class="form-label" for="input-example-1">DAY</label>
  <div class="form-group">
  <input class="form-input" type="text" id="input-example-1"  name="id" readonly value=" <?php echo  $bus["id"]  ?>" />
  </div>
   <div class="form-group">
  <select class="form-select" name="day_id" >
    
    <option value="1" <?php if($bus["day_id"] == "1") {echo "selected"; }?> >  Monday</option>
    <option value="2"<?php if($bus["day_id"] == "2"){ echo "selected";}?> > Tuesday</option>
    <option value="3"<?php if($bus["day_id"] == "3"){ echo "selected";}?>>Wednesday</option>
	<option value="4" <?php if($bus["day_id"] == "4"){ echo "selected";}?>>Thursday</option>
	<option value="5" <?php if($bus["day_id"] == "5"){ echo "selected";}?>>Friday</option>
	<option value="6" <?php if($bus["day_id"] == "6") {echo "selected";} ?>>Saturday</option>
  </select> 


 
  </div>
 
     <label class="form-label" for="input-example-1">Departure Time</label>
   
  <div class="form-group">
  
  <input class="form-input" type="text" id="input-example-1"  name="dept_time" value =" <?php echo $bus["dept_time"] ?>" />
  
  </div>
  
  
     <label class="form-label" for="input-example-1">Location</label>
   
  <div class="form-group">
  <select class="form-select" name="dept_loc">
  <option value="Brampton" <?php if($bus["dept_loc"] == "Brampton") {echo "selected"; }?> >  Brampton</option>
    <option value="Missisauga"<?php if($bus["dept_loc"] == "Mississauga"){ echo "selected";}?> > Missisauga</option>
    <option value="Lambton"<?php if($bus["dept_loc"] == "Lambton"){ echo "selected";}?>>Lambton</option>
  
  </select>
  
  
  </div>
  
  
 
 <label class="form-label" for="input-example-1" >Destination</label>
   <div class="form-group">
    <select class="form-select" name="destination">
  <option value="Brampton" <?php if($bus["destination"] == "Brampton") {echo "selected"; }?> >  Brampton</option>
    <option value="Missisauga"<?php if($bus["destination"] == "Mississauga"){ echo "selected";}?> > Missisauga</option>
    <option value="Lambton"<?php if($bus["destination"] == "Lambton"){ echo "selected";}?>>Lambton</option>
  
  </select>
</div>

  <input type="submit" class="btn btn-primary centered" value="Update"></input>
</form>
			
		</div>
		
	  </div>
	</div> <!-- // container -->
  
	<footer class="text-center">
		&copy; <?php echo date("Y") ?> Lambton College Toronto <br>
	</footer>  
 </body>
 </html>
 
