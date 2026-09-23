<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome 4 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Student Management System</title>
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #01411C;">
            <div class="container">

                <!-- Brand -->
                <a class="navbar-brand fw-bold" href="#">
                    <i class="fa fa-user-circle"></i> Hamayun Javed
                </a>

                <!-- Mobile Toggle Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                    aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar Links -->
                <div class="collapse navbar-collapse" id="mainNavbar">

                    <ul class="navbar-nav ms-auto">


                        <?php if (!empty($_SESSION['name'])) { ?>

                            <!-- Home -->
                            <li class="nav-item">
                                <a class="nav-link active" href="home.php">
                                    <i class="fa fa-home"></i> Home
                                </a>
                            </li>

                            <!-- Account Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">

                                    <i class="fa fa-user"></i> Account
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end">

                                    <!-- Login -->
                                    <li>
                                        <a class="dropdown-item" href="actions/logout.php">
                                            <i class="fa fa-sign-in"></i> Logout
                                        </a>
                                    </li>



                                <?php } else { ?>

                                    <!-- Account Dropdown -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown">

                                            <i class="fa fa-user"></i> Account
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-end">

                                            <!-- Login -->
                                            <li>
                                                <a class="dropdown-item" href="index.php">
                                                    <i class="fa fa-sign-in"></i> Login
                                                </a>
                                            </li>

                                            <!-- Register -->
                                            <li>
                                                <a class="dropdown-item" href="register.php">
                                                    <i class="fa fa-user-plus"></i> Register
                                                </a>
                                            </li>

                                            <?php
                        } ?>

                                    </ul>
                                </li>

                            </ul>

                </div>
            </div>
        </nav>
    </header>