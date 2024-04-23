<?php
$username = $_POST['username'];
$password = $_POST['password'];
session_start();

if ($username == "thamil" && $password == "123"){
    echo "Credentials matched. Setting session variable...<br>";
    $_SESSION['SF_KEY'] = "hello";
    echo "Session variable set: " . $_SESSION['SF_KEY'] . "<br>";
    header("Location: http://localhost:8080/SafeWeb/Dashboard.php");
    exit;
} else {
    echo "Invalid username or password.";
}
?>
