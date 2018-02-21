<?php
session_start();
if(isset($_POST['submit'])) {
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
$u =  $_POST["username"] ;
$p = $_POST["password"];
//echo "hello". $u;
//echo $_POST["password"];
	
	$id = 1;
  $sql =  "SELECT * from admin1";
             $sql .= " WHERE id='" . $id . "'";

             $results = mysqli_query($connection, $sql);

             if ($results == FALSE) {
               echo "Database query failed. <br/>";
               echo "SQL command: " . $sql;
               exit();
             }

             // it's different! you only need to get 1 person, so no loop!
             $admin = mysqli_fetch_assoc($results);
             //print_r($admin);

            // echo "<p><strong>id: </strong>" . $admin["id"] . "</p>";
         //    echo "<p><strong> Name: </strong>" . $admin["username"] . "</p>";
           //  echo "<p><strong>Password: </strong>" . $admin["password"] . "</p>";
              
             
                  echo $u . " ***** ". $p;
                
				 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 if($admin["username"] == $u && $admin["password"] == $p)
              {
   session_start();
 $_SESSION["loggedin"] = true;
  
   header("Location: " . "menu.php");
 }
 else {
   session_start();
   //
   if (!isset($_SESSION['loggedin'])) {
      header("Location: " . "admin_login.php");
    }
    else {
     header("Location: " . "menu.php");
	
   }
 }
				
      echo "<p><strong>Wrong User Name or password";
				 }
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
		<a href="#" class="btn btn-link">Admin</a>

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
<form class="form-group" method="POST" action="admin_login.php">
  <label class="form-label" for="input-example-1" >Name</label>
  <input class="form-input" type="text" id="input-example-1" placeholder="User ID" name ="username">
  <br><br>
   <label class="form-label" for="input-example-1">Password</label>
  <input class="form-input" type="password" id="input-example-1" placeholder="Password" name="password">
  <br> <br> 
  <input type="submit" class="btn btn-primary centered" value="Login" name="submit"></input>
</form>
			
		</div>
		
	  </div>
	</div> <!-- // container -->
  
	<footer class="text-center">
		&copy; <?php echo date("Y") ?> Lambton College Toronto <br>
	</footer>
  </body>
</html>