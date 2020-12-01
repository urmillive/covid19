<?php include "../config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard | Covid-19 Awareness</title>
    <link href="dist/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Covid-19 Dashboard</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <!-- <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div> -->
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">

            <?php
            if (isset($_SESSION["admin_id"])) {
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Welcome, <b><?php echo $_SESSION["admin_username"]; ?></b></a>
                </li>
                <button class="btn btn-outline-danger ml-3 pr-3 pl-3" type="submit" onclick="location.href='admin-logout.php'">Logout</button>
            <?php
            } else {
            ?>
        </ul>
        <a href="admin-login.php"><button class="btn btn-primary ml-2 my-2 my-sm-0" type="submit">Login</button></a>
    <?php
            }
    ?>

    </nav>
    <?php
    if (isset($_SESSION['admin_id'])) {
        include "sidebar.php";
    }

    ?>