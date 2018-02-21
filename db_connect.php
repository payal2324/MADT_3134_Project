<?php

// This guide demonstrates the five fundamental steps
// of database interaction using PHP.

// Credentials
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cestar_bus";

// 1. Create a database connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// 2. Perform database query
$sql = "SELECT * FROM bus_from_brampton";
$results = mysqli_query($connection, $sql);

// 3. Use returned data (if any)
while ($record = mysqli_fetch_assoc($results)) {
  print_r($record["id"]);
  echo "<br />";
}

// 4. Release returned data
mysqli_free_result($results);

// 5. Close database connection
mysqli_close($connection);

?>
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
<form class="form-group" method="Post" action="update.php">
  <label class="form-label" for="input-example-1">DAY</label>
  <div class="form-group">
  <input class="form-input" type="text" id="input-example-1"  name="day_id" value=" <?php echo  $bus["day_id"] ?>" />
  
  <br> 
   <input class="form-input" type="text" id="input-example-1"  name="dept_time" value =" <?php echo $bus["dept_time"] ?>" />
  
  
</div>
  <br><br>
   <label class="form-label" for="input-example-1">Departure Time</label>
   
  <br> <br> 
   <label class="form-label" for="input-example-1">Location</label>

<br><br>
 <label class="form-label" for="input-example-1" >Destination</label>
   <div class="form-group">
 
</div>

  <input type="submit" class="btn btn-primary centered" value="Update"></input>
</form>
			
		</div>
		
	  </div>
	</div> <!-- // container -->
  
	<footer class="text-center">
		&copy; <?php echo date("Y") ?> Lambton College Toronto <br>
	</footer>  