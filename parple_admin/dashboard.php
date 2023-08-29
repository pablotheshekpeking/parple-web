<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);


// Start the session to access session variables
session_start();

// Check if the user is already logged in
if (!isset($_SESSION['user_id'])) {
    // If the user is not logged in, redirect to the login page or any other appropriate page
    header("Location: index.php");
    exit;
}

require_once '../connection.php';

try {
    $query = "SELECT id, email FROM subscribers";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    die("Error: " . $e->getMessage());
}

// Check if the logout link or button is clicked
if (isset($_GET['logout'])) {
    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect to the login page or any other appropriate page after logout
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="icon" type="image/svg" href="../images/icon.svg">
    <link rel="stylesheet" type="text/css" href="css/dasboardstyles.css">
</head>
<body>
    <header style="background-color: #FB923C; color: black;">
        <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
        <a href="?logout=true">Logout</a>
        <!--<nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="?logout=true">Logout</a></li>
            </ul>
        </nav>-->
    </header>
    <main>
    <section class="widget" style="text-align: center;">
    <table style="margin: 0 auto;">
    <thead>
            <tr>
                <th style="background-color: #f2f2f2; border: 1px solid #ccc; padding: 8px;">ID</th>
                <th style="background-color: #f2f2f2; border: 1px solid #ccc; padding: 8px;">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $row) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td style="padding: 15px;"><?php echo $row['email']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>

        
        <!-- Add more widgets as needed -->
</main>

<button onclick="printTable()" style="position: absolute; left: 670px;" class="centered-button">Print Table</button>

<script>
    function printTable() {
        var table = document.querySelector('table'); // Select the table element
        var newWin = window.open('', 'Print-Window'); // Open a new window for printing
        newWin.document.open();
        newWin.document.write(table.outerHTML); // Write the table's HTML content
        newWin.document.close();
        newWin.print(); // Trigger the print dialog
        newWin.close();
    }
</script>
    
</body>
</html>
