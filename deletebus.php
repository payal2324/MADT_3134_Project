<?php
  if (isset($_GET["id"]) == FALSE) {
    // missing an id parameters, so
    // redirect person back to add employee page
    header("Location: " . "showallbuses.php");
    exit();
  }

  $id = $_GET["id"];

  // check for a POST request
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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

    $query = "DELETE FROM bus_from_brampton ";
    $query .= "WHERE id='" . $id . "' ";
    $query .= "LIMIT 1";

    $results = mysqli_query($connection, $query);

    // for delete statements, the result is going to be true or false.
    if ($results == TRUE) {
      header("Location: " . "showallbuses.php");
      exit();
    }
    if ($results == FALSE) {
      echo "Database query failed. <br/>";
      echo "SQL command: " . $query;
      exit();
    }

    mysqli_free_result($results);
    mysqli_close($connection);
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="../css/spectre.min.css">
    <link rel="stylesheet" href="../css/spectre-exp.min.css">
    <link rel="stylesheet" href="./css/spectre-icons.min.css">
  </head>
  <body>
  <header class="navbar">
	 <div class ="container">
	  <section class="navbar-center">
		<a href="index.php"><img src="https://www.lambtoncollege.ca/images/header/Logo.png" style="max-width:300px; margin-left:500px"></a>
	  </section>
	  	
	</header>	
    <?php


    ?>


    <nav style="margin-left:150px">
    
       <br> <br> <br> <br> <br> <br>
          <a href="showallbuses.php">BACK</a>
    </nav>

    <div class="container">
      <div class = "columns">
        <div class="column col-10 col-mx-auto">

          <h3 style="margin-left:150px"> Are you sure you want to delete this route ? </h3>
          <form style="margin-left:150px" action="deletebus.php?id=<?php echo $id; ?>" method="POST">
            <button type="submit" name="choice"> Yes! </button>
          </form>

        </div> <!--// col-12 -->
      </div> <!-- // column -->
    </div> <!--// container -->

    <footer style="margin-top:250px ;margin-left:600px;">
      &copy; <?php echo date("Y") ?> Cestar College
    </footer>

  </body>
</html>