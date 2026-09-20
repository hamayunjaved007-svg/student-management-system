<?php include('includes/header.php'); // Header ?>

<!-- This code is for alert for error -->
<?php if (!empty($_GET['error'])) { ?>

    <div id="errorAlert" class="alert alert-danger alert-dismissible fade show" role="alert">

        <i class="fa fa-exclamation-circle"></i>
        <strong>Warning!</strong> Something went wrong!

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



<div class="container my-5">

    <div class="row justify-content-center">

        <div class="col-12 col-sm-10 col-md-6 col-lg-4">

            <div class="card shadow border-0">

                <!-- Header -->
                <div class="card-header text-center text-white" style="background-color: #01411C;">

                    <h3 class="mb-1">
                        <i class="fa fa-user-plus"></i>
                        Register
                    </h3>

                </div>


                <!-- Registration Form -->
                <div class="card-body p-4">

                    <form action="actions/register.php" method="post">

                        <!-- Name -->
                        <div class="mb-3">

                            <label class="form-label">
                                <i class="fa fa-user"></i>
                                Name
                            </label>

                            <input type="text" class="form-control" placeholder="Enter your name" name="name" required>

                        </div>


                        <!-- Email -->
                        <div class="mb-3">

                            <label class="form-label">
                                <i class="fa fa-envelope"></i>
                                Email
                            </label>

                            <input type="email" class="form-control" placeholder="Enter your email" name="email"
                                required>

                        </div>


                        <!-- WhatsApp Number -->
                        <div class="mb-3">

                            <label class="form-label">
                                <i class="fa fa-whatsapp"></i>
                                Enter WhatsApp Number
                            </label>

                            <input type="tel" class="form-control" placeholder="e.g. 0300 1234567" name="whatsapp"
                                required maxlength="11">

                        </div>


                        <!-- Password -->
                        <div class="mb-3">

                            <label class="form-label">
                                <i class="fa fa-lock"></i>
                                Password
                            </label>

                            <input type="password" class="form-control" placeholder="Enter your password"
                                name="password" required>

                        </div>


                        <!-- Confirm Password -->
                        <div class="mb-3">

                            <label class="form-label">
                                <i class="fa fa-lock"></i>
                                Confirm Password
                            </label>

                            <input type="password" class="form-control" placeholder="Confirm your password"
                                name="confirm_password" required>

                        </div>


                        <!-- Gender -->
                        <div class="mb-3">

                            <label for="" class="form-label d-block">
                                <i class="fa fa-users"></i>
                                Gender
                            </label>

                            <div class="form-check form-check-inline">

                                <input class="form-check-input" type="radio" name="gender" id="male" value="male"
                                    required>

                                <label class="form-check-label" for="male">
                                    <i class="fa fa-male"></i>
                                    Male
                                </label>

                            </div>


                            <div class="form-check form-check-inline">

                                <input class="form-check-input" type="radio" name="gender" id="female" value="female">

                                <label class="form-check-label" for="female">
                                    <i class="fa fa-female"></i>
                                    Female
                                </label>

                            </div>

                        </div>


                        <!-- Register Button -->
                        <div class="d-grid mt-4">

                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-user-plus"></i>
                                Register
                            </button>

                        </div>

                    </form>


                    <!-- Login Link -->
                    <div class="text-center mt-4">

                        <span>Already have an account?</span>

                        <a href="index.php" class="text-decoration-none fw-bold">
                            <i class="fa fa-sign-in"></i>
                            Login
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<?php include('includes/footer.php'); // Footer ?>