<?php
$name = $_POST['name'];
$email = $_POST['email'];
$whatsapp = $_POST['whatsapp'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$gender = $_POST['gender'];

// echo $name . ' ' . $email . ' ' . $whatsapp . ' ' . $password . ' ' . $confirm_password . ' ' . $gender;
if ($password == $confirm_password) {

    // $cn = mysqli_connect('localhost', 'root', '', 'student-management-system') or die("Connection failed!"); // for connection

    include('cn.php');  //for connection with database




    $que = "SELECT * FROM users WHERE email = '$email' "; // for finding data already exist or not against email
    $result = mysqli_query($cn, $que) or die('Cannot run Query!'); //its running queries.
    $row = mysqli_num_rows($result); // number counts rows of the result
    if ($row > 0) {
        $error = "Email already exists";
        header("Location: ../register.php?error=" . $error);
    } else {
        //for insert query
        $query = "INSERT INTO users (name, email, whatsapp, password, gender) VALUES ('$name', '$email', '$whatsapp', '$password', '$gender')";
        mysqli_query($cn, $query) or die(mysqli_error($cn));
        $error = "Thank you for register";
        header("Location: ../register.php?success=" . $error);

    }

} else {
    $error = "Password did not match";
    header("Location: ../register.php?error=" . $error);
}
?>