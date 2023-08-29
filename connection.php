<?php
// Replace these variables with your actual database credentials
$host = 'localhost'; // Usually 'localhost' if the database is on the same server
$db_name = 'parple_waitlist';
$username = 'root';
$password = '';

try {
    // Establish a database connection using PDO
    $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);

    // Set PDO attributes (optional but recommended)
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    // You can set additional attributes or perform other setup tasks here if needed
    //$conn = new mysqli($host, $username, $password, $db_name);

} catch (PDOException $e) {
    // If there is an error, catch it and display a message
    die("Connection failed: " . $e->getMessage());
}
?>

<?php 
//$hostName = "localhost";
//$userName = "root";
//$password = "";
//$databaseName = "parple_waitlist";
 //$conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
//if ($conn->connect_error) {
  //die("Connection failed: " . $conn->connect_error);
//}
?>



