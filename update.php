<?php


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

 
  
  $query = "UPDATE bus_from_brampton SET  ";
  //$query .= "id='" . $_POST["id"] . "', ";
  $query .= "day_id='" . $_POST["day_id"] . "', ";
  $query .= "dept_time='" . $_POST["dept_time"] . "', ";
  $query .= "dept_loc=' "  . $_POST["dept_loc"] . "' ,";
   $query .= "destination='" . $_POST["destination"] . "'";
$query .= "WHERE id='" .$_POST["id"] . "' ";
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