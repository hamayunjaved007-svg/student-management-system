<?php include('includes/header.php'); // Header 
session_start();
if (empty($_SESSION['name'])) {
    header('location:index.php');
}

?>

<center>
    <h2>Hello <?php echo $_SESSION['name'] ?>! Welcome to the home page...
    </h2>
</center>

<?php include('includes/footer.php'); // Footer ?>