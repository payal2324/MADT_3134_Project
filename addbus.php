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
		

	  </section>
	  <section class="navbar-center">
		<a href="index.php"><img src="https://www.lambtoncollege.ca/images/header/Logo.png" style="max-width:128px;"></a>
	  </section>
	  <section class="navbar-section">
		<h2>Add Schedule</h2>
		
	  </section>
	</header>	

	<div class="container">
	  <div class="columns">
		<div class="column col-6 centered">
		<!-- form input control -->
<form  class="form-group" method="Post" action="add.php">
  <label class="form-label" for="input-example-1">DAY</label>
  <div class="form-group">
  <select class="form-select" name="day_id" >
    
    <option value="Monday">1</option>
    <option value="Tuesday">2</option>
    <option value="Wednesday">3</option>
	<option value="Thursday">4</option>
	<option value="Friday">5</option>
	<option value="Saturday">6</option>
  </select>
</div>
  <br><br>
   <label class="form-label is-error" for="input-example-1" required >Departure Time</label>
   <div class="form-group">
   <div class="col-12">
      <input class="form-input" type="text" id="input-example-1"  name="dept_time" placeholder="Departure Time">
    </div>
</div>
 
  <br> <br> 
   <label class="form-label" for="input-example-1">Location</label>
   <div class="form-group">
  <select  class="form-select" name="dept_loc">
    
    <option value="Brampton">Brampton</option>
    <option value="Mississauga">Mississauga</option>
    <option value ="Lambton">Lambton</option>
  </select>
</div>
<br><br>
 <label class="form-label" for="input-example-1" >Destination</label>
   <div class="form-group">
  <select class="form-select"  name="destination">
    
    <option value="Brampton">Brampton</option>
    <option value="Mississauga">Mississauga</option>
    <option value="Lambton">Lambton</option>
  </select>
</div>
  <input type="submit" class="btn btn-primary centered" value="ADD" ></input>
</form>
			
		</div>
		
	  </div>
	</div> <!-- // container -->
  
	<footer class="text-center">
		&copy; <?php echo date("Y") ?> Lambton College Toronto <br>
	</footer>
	
	
  </body>
</html>
