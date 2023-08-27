<?php
// Start the session to store login status
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);


// Include the database connection file
require_once '../connection.php';

// Check if the user is already logged in, redirect to the dashboard if true
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit;
}

// Check if the login form is submitted
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform basic input validation (you can add more validation if required)
    if (empty($username) || empty($password)) {
        $error_message = "Please enter both username and password.";
    } else {
        // Validate the user's credentials against the database
        $query = "SELECT id, username FROM users WHERE username = :username AND password = :password";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':username', $username);
        // In a real-world application, you should hash the password before storing and compare hashed passwords here.
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        // Fetch the user's data
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Login successful, store user data in session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            // Redirect to the dashboard or any other authenticated page
            header("Location: dashboard.php");
            exit;
        } else {
            $error_message = "Invalid username or password.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="icon" type="image/svg" href="../images/icon.svg">
    <link rel="stylesheet" type="text/css" href="css/loginstyle.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if (isset($errorMessage)) { ?>
            <p class="error"><?php echo $errorMessage; ?></p>
        <?php } ?>
        <form action="index.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
        <div class="password-container">
            <input type="password" id="password" name="password" required>
            <span class="password-toggle" id="password-toggle" onclick="togglePasswordVisibility()">&#128065;</span>
        </div>
            <input type="submit" name="login" value="Login" class="button">
            <a href="../index.php" style="text-align: center;"><label>Home</label></a>
        </form>
    </div>

<script>
    function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var passwordToggle = document.getElementById("password-toggle");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordToggle.innerHTML = "&#128064;"; // Change to hide icon
    } else {
        passwordInput.type = "password";
        passwordToggle.innerHTML = "&#128065;"; // Change to show icon
    }
}

</script>
</body>
</html>
