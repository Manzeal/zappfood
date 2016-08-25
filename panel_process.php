<?php 
$servername = "localhost";
$username = "posakya";
$password = "edyhupyry";
$dbname = "roshanp_a";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 $table_number = $_GET['table_no'];

 $sql_clear ="DELETE FROM cart where table_no ='$table_number'";
 $query_clear = mysqli_query($conn,$sql_clear);
 if ($query_clear) {
 	
 	header('location:panel.php');
 }

 ?>