<?php
 if (isset($_SESSION['loggedin'])) {
     session_start();
    }
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
	 
		
	</header>	
<h1 style="font-size:80px; text-align:center; color:#1553"> BUS SCHEDULE</h1>
	<div class="container">
	  <div class="columns">
	
		
		<div class="column col-12 centered">
			<div style="border:2px solid black ">
			<table class="table table-striped table-hover">
			<tr>
			<th>    ID   </th>
			<th>	DAY	</th>
			<th>	TIME	</th>
			<th>	FROM	</th>
			<th>	TO	</th>
				
				 <th>&nbsp;</th>
              <th>&nbsp;</th>
			</tr>
			
			<?php
				while ($record = mysqli_fetch_assoc($results)) {
			
			?>
			<tr>      
			<td> <?php  echo $record["id"]	 ?></td>
			<td><?php  echo $record["day_id"]	 ?>	</td> 
			<td><?php  echo $record["dept_time"]	 ?>	</td>
			<td><?php  echo $record["dept_loc"]	 ?>	</td>
			<td><?php  echo $record["destination"]	 ?>	</td>
			
			<td><a class="action" href="<?php echo 'updatebus.php?id=' . $record['id']; ?>">Edit</a></td>
            <td><a class="action" href="<?php echo 'deletebus.php?id='. $record["id"]; ?>">Delete</a></td>
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
