<?php include('includes/header.php'); // Header ?>

<center>
    <h2>Login Page</h2>
</center>

<div class="container my-5">

    <div class="row justify-content-center">

        <div class="col-12 col-sm-10 col-md-6 col-lg-4">

            <div class="card shadow border-0">

                <!-- Header -->
                <div class="card-header text-center text-white" style="background-color: #01411C;">

                    <h3 class="mb-1">
                        <i class="fa fa-sign-in"></i>
                        Login
                    </h3>

                    <small>Welcome back to Hamayun Javed</small>

                </div>

                <!-- Form -->
                <div class="card-body p-4">

                    <form>

                        <!-- Email -->
                        <div class="mb-3">

                            <label class="form-label">
                                <i class="fa fa-envelope"></i>
                                Email Address
                            </label>

                            <input type="email" class="form-control" placeholder="Enter your email" required>

                        </div>


                        <!-- Password -->
                        <div class="mb-3">

                            <label class="form-label">
                                <i class="fa fa-lock"></i>
                                Password
                            </label>

                            <input type="password" class="form-control" placeholder="Enter your password" required>

                        </div>


                        <!-- Remember + Forgot -->
                        <div class="d-flex justify-content-between align-items-center mb-3">

                            <div class="form-check">

                                <input type="checkbox" class="form-check-input" id="remember">

                                <label class="form-check-label" for="remember">
                                    Remember Me
                                </label>

                            </div>

                            <a href="#" class="text-decoration-none">
                                Forgot Password?
                            </a>

                        </div>


                        <!-- Login Button -->
                        <div class="d-grid">

                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-sign-in"></i>
                                Login
                            </button>

                        </div>

                    </form>


                    <!-- Register -->
                    <div class="text-center mt-4">

                        <span>Don't have an account?</span>

                        <a href="#" class="text-decoration-none fw-bold">
                            <i class="fa fa-user-plus"></i>
                            Register
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<?php include('includes/footer.php'); // Footer ?>