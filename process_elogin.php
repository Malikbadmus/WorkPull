<?php
session_start(); // Start the session at the beginning
include_once('config.php');


$email = $_POST['email'];
$passd = $_POST['password'];

// Use prepared statements to prevent SQL injection
$stmt = $db1->prepare("SELECT * FROM employer WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$Password = $user['password'];
//Debugging: Print email and check if $user contains data
//echo "Email: " . $email;
//echo "<br>";


 if ($user) {
    echo "User Data: ";
    echo "<pre>";
    print_r($user);
    echo "</pre>";

    
    echo "Password from Database: " . $Password;
    echo "<br>";
	echo "Password from website: ". $passd;
    echo "<br>";
	

	
    if ($passd == $Password) {
        $_SESSION["id"] = $user['emid'];
        $_SESSION["type"] = $user['usertype'];
		$_SESSION["status"] = $user['status'];
        header('location: employer/profile.php?msg=success');
        exit();
    } else {
        // Login failed
        $_SESSION['login_error'] = "Invalid username or password";
        header('Location: elogin.php'); // Redirect back to the login page
        exit();
    }
}
?>

