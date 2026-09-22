<!-- This code is for alert for error -->
<?php if (!empty($_GET['error'])) { ?>

    <div id="errorAlert" class="alert alert-danger alert-dismissible fade show" role="alert">

        <i class="fa fa-exclamation-circle"></i>
        <strong>Warning!</strong>
        <?php echo $_GET['error']; ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>

    </div>

    <script>
        setTimeout(function () {
            var alert = document.getElementById('errorAlert');

            if (alert) {
                var bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
                bsAlert.close();
            }
        }, 3000);
    </script>

<?php } ?>


<!-- This code is for alert for success -->
<?php if (!empty($_GET['success'])) { ?>

    <div id="successAlert" class="alert alert-success alert-dismissible fade show" role="alert">

        <i class="fa fa-exclamation-circle"></i>
        <strong>Success!</strong>
        <?php echo $_GET['success']; ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>

    </div>

    <script>
        setTimeout(function () {
            var alert = document.getElementById('successAlert');

            if (alert) {
                var bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
                bsAlert.close();
            }
        }, 3000);
    </script>

<?php } ?>