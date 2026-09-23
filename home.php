<?php include('includes/header.php'); // Header 

if (empty($_SESSION['name'])) {  //I use start session line in header.php page for start the session for every page.
    header('location:index.php');
}

include('actions/cn.php');
$que = "SELECT * FROM users ORDER BY id ASC";
$result = mysqli_query($cn, $que) or die('Cannot run Query!');

?>


<div class='p-5' style="background-color: #008d3bff; color:white;">
    <div class="container">
        <h2><i class="fa fa-smile-o"></i> Hello <?php echo $_SESSION['name'] ?>! Welcome to the home page...
        </h2>
    </div>
</div>
<div class="container-fluid">
    <div class="card rounded-0 mt-2">
        <div class="card-header">
            <i class="fa fa-users"></i>All Users
        </div>
        <table class="table table-bordered table-stripped table-hover">
            <tr>
                <th><i class="fa fa-id-badge"></i> #</th>
                <th><i class="fa fa-user"></i> Name</th>
                <th><i class="fa fa-envelope"></i> Email</th>
                <th><i class="fa fa-whatsapp"></i> Whatsapp</th>
                <th><i class="fa fa-cog"></i> Action</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['whatsapp'] ?></td>
                    <td>
                        <button class="btn btn-sm btn-primary">
                            <i class="fa fa-pencil"></i>
                        </button>
                        <button class="btn btn-sm btn-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>




<?php include('includes/footer.php'); // Footer ?>