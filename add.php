<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  //print_r($_POST);

  // Handle form values sent by addEmployee.php
  $day_id = $_POST['day_id'];
  $dept_time = $_POST['dept_time'];
  $dept_loc = $_POST['dept_loc'];
  $destination = $_POST['destination'];
echo $day_id; echo $dept_time; echo $dept_loc; echo $destination;
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
  $sql = "INSERT INTO bus_from_brampton(day_id, dept_time, dept_loc,destination) VALUES ('$day_id','$dept_time','$dept_loc','$destination')";
 

  $result = mysqli_query($connection, $sql);

  if ($result == TRUE) {
    $new_id = mysqli_insert_id($connection);
	echo "new route added ";
    header("Location: " . "showallbuses.php?id=".$new_id);
    exit();
  }
  else {
    echo "INSERT failed. <br/>";
    echo "SQL command: " . $sql;

    // print out a the error
    echo mysqli_error($connection);
    mysqli_close($connection);

    exit();
  }

  // it's different! you only need to get 1 person, so no loop!


  mysqli_free_result($results);



} else {

  // you got a GET request, so
  // redirect person back to add employee page
  header("Location: " . "addEmployee.php");
  exit();
}
?>
