<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Validate the email address (you can add more robust validation)
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Database configuration
        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "parple_waitlist";

        // Create a database connection
        $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

        // Check if the connection was successful
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert the email address into the database
        $sql = "INSERT INTO subscribers (email) VALUES ('$email')";
        if ($conn->query($sql) === TRUE) {
            echo "Thank you for joining the waitlist!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the database connection
        $conn->close();
    } else {
        echo "Invalid email address.";
    }
} else {
    echo "Invalid request.";
}
?>
