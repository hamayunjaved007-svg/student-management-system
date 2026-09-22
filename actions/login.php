<?php
$email = $_GET['email'];
$password = $_GET['password'];


include('cn.php'); // for database connection
$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' "; // for finding data
$result = mysqli_query($cn, $query) or die('Cannot run Query!');
$row = mysqli_num_rows($result);
if ($row > 0) {
    $row = mysqli_fetch_array($result);
    session_start();
    // $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $row['name'];
    // $_SESSION['email'] = $row['email'];
    // $_SESSION['whatsapp'] = $row['whatsapp'];
    // $_SESSION['gender'] = $row['gender'];

    header("Location: ../home.php");
} else {
    $error = "Invalid email or password";
    header("Location: ../index.php?error=" . $error);
}

?>