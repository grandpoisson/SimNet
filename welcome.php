<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>User Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<link href="./css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div>
        <div class="dashboard">
            <div class="member-dashboard">Hi <b><?php echo htmlspecialchars($_SESSION["firstname"]); ?></b>, welcome to SimNet.<br>
                Click to <a href="reset-password.php" class="reset-button">Reset Your Password</a>
                Click to <a href="logout.php" class="logout-button">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>