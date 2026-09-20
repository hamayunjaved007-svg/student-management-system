<?php
$name = $_POST['name'];
$email = $_POST['email'];
$whatsapp = $_POST['whatsapp'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$gender = $_POST['gender'];

// echo $name . ' ' . $email . ' ' . $whatsapp . ' ' . $password . ' ' . $confirm_password . ' ' . $gender;
if ($password == $confirm_password) {
    echo "Password Matched";
} else {
    $error = "Password did not match";
    header("Location: ../register.php?error=" . $error);
}
?>