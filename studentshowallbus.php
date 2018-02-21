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
		<a href="index.php"><img src="https://www.lambtoncollege.ca/images/header/Logo.png" style="max-width:128px;"></a>
	  </section>
	  <section class="navbar-section">
	  <h1 style="font-size:30px; text-align:center; color:#1553"> WELCOME STUDENT </h1>
	  </section>
	  
	</header>	

	<div class="container">
	  <div class="columns">
		
		
		<div class="column col-4 centered">
		<form  class="form-group" method="Post" action="nextbus.php">
		<label class="form-label" for="input-example-1" > FROM </label>
		
		<div class="form-group">
  <select  class="form-select" name="from">
    <option value="Brampton">Brampton</option>
    <option value="Mississauga">Mississauga</option>
    <option value ="Lambton">Lambton</option>
  </select>
		</div>
		</div>

	<div class="column col-4 centered">
		<label class="form-label" for="input-example-1" > TO </label>
   <div class="form-group" >
  <select class="form-select"  name="to">
     <option value="Lambton">Lambton</option>
    <option value="Brampton">Brampton</option>
    <option value="Mississauga">Mississauga</option>
   
  </select>
</div>
</div>

		<div class="column col-2 centered" style="margin-top:11px;">
		<br>
  <input type="submit" class="btn btn-primary centered"  value=" SHOW NEXT BUS " ></input>
		</div> 
		</form>
		</div>
		
		</div>
		<br>
		<div class="column col-12 centered">
			<div style="border:2px solid black ">
			<h3> <u><i>Note</i></u> : day : 1 = Monday, 2 = Tuesday , 3 = Wednesday , 4 = Thursday  , 5 = Friday , 6 = Saturday </h3>
			<table class="table table-striped table-hover">
			<tr>
			
			<th>	DAY	</th>
			<th>	TIME	</th>
			<th>	FROM	</th>
			<th>	TO	</th>
				
			
			</tr>
			
			<?php
				while ($record = mysqli_fetch_assoc($results)) {
			
			?>
			<tr>      
			
			<td><?php  echo $record["day_id"]	 ?>	</td> 
			<td><?php  echo $record["dept_time"]	 ?>	</td>
			<td><?php  echo $record["dept_loc"]	 ?>	</td>
			<td><?php  echo $record["destination"]	 ?>	</td>
			
			<?php
				}
			?>
			</tr>
			</table>
			</div>
		</div>
		
	  </div>
	</div> <!-- // container -->
  
	<footer class="text-center">
		&copy; <?php echo date("Y") ?> Lambton College Toronto <br>
	</footer>
  </body>
</html>
