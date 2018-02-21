<?php

session_start();

//print_r($_SESSION["loggedin"]);   // 1   
//print_r($_SESSION);  // 1Array ( [loggedin] => 1 )
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
	 <div class ="container">
	  <section class="navbar-center">
		<a href="index.php"><img src="https://www.lambtoncollege.ca/images/header/Logo.png" style="max-width:300px; margin-left:300px"></a>
	  </section>
	  	
	</header>	

	<div class="container">
	  <div class="columns">
		<div class="column col-3 card">
 <div class="card-image">
   <img src="https://scontent.fybz2-1.fna.fbcdn.net/v/t1.0-9/11745428_10153375558735837_2418257944696331924_n.jpg?oh=b9826e251e94f679397dd51bbcb69009&oe=5B1545EB"   style="width:400px;"class="img-responsive">
 </div>
 <div class="card-header">
   <div class="card-title h5">ASH RAI</div>
   <div class="card-subtitle text-gray"> </div>
 </div>
 
		</div> 
		
	
		
		<div class="columns" style="margin-left:50px">
		<div class="column col-4 centered">
		<form  class="form-group" method="Post" action="nextbus.php">
		<label class="form-label" for="input-example-1" > FROM </label>
		
		<div class="form-group">
  <select  class="form-select" name="from">
   <option value ="Lambton">Lambton</option>
    <option value="Mississauga">Mississauga</option>
    
	 <option value="Brampton">Brampton</option>
  </select>
		</div>
		</div>

	<div class="column col-4 centered">
		<label class="form-label" for="input-example-1" > TO </label>
   <div class="form-group" >
  <select class="form-select"  name="to">
   <option value="Brampton">Brampton</option>
     <option value="Lambton">Lambton</option>
   
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
		<div class="columns" style="margin-left:250px">
		<div class="column col-4 centered">
		<form  class="form-group" method="post" action="logout.php" >
		
		 <input type="submit" class="btn btn-primary centered"  value="LOGOUT " ></input>
		</form>
		
		<ul> 
		<br> <a href="addbus.php" class="btn btn-link">Add New Bus Route</a> 
		<br><span> <a href="showallbuses.php" class="btn btn-link"> Show All Buses </a>
		<br><a href ="sendmsg.php" class ="btn btn-link"> Send Message </a>
		<br><a href ="json/json_allbuses.php" class ="btn btn-link"> API ALL Buses </a>
		</div>
		</div>
		
		
		
		
		</div>
		
		</div>
  
	<footer class="text-center">
		&copy; <?php echo date("Y") ?> Lambton College Toronto <br>
	</footer>
  </body>
</html>
