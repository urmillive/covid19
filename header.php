<!doctype html>
<html lang="en">
<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Covid-19 Awareness</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!--Datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid&family=Luckiest+Guy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

    <!-- my Stylessheets -->
    <link rel="stylesheet" href="css/mystyle.css">

    <!-- Jquery Alert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

	<link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="images/covid-favicon.png" type="image/x-icon">
    
</head>

<body>

    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Covid-19 Awareness</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./questions.php">Symptom-Checker</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./dailycases.php">India-Daily</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./indiacases.php">India-Cases</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./worldwidecases.php">World-Wide</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./blogs.php">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./about.php">About Me</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./suggestions.php">Suggestions</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="./contribution.php">Contribution</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./contactus.php">Contact Us</a>
                </li>
            </ul>
            <ul class="navbar-nav">

                <?php
                if (isset($_SESSION["username"])) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Welcome, <?php echo $_SESSION["username"]; ?></a>
                    </li>
                    <button class="btn btn-outline-danger ml-3 pr-3 pl-3" type="submit" onclick="location.href='logout.php'">Logout</button>
                <?php
                } else {
                ?>
            </ul>
            <a href="signup.php"><button class="btn btn-warning mx-2 ml-2 my-2 my-sm-0" type="submit">Register</button></a>
            <a href="login.php"><button class="btn btn-success mx-2 ml-2 my-2 my-sm-0" type="submit">Login</button></a>
        <?php
                }
        ?>

        </div>
    </nav>
</body>
    <!-- Navbar End -->