<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet">
        <script src="other/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <title>Turning Page</title>
    </head>
    <body>
        




<nav class="navbar navbar-expand-md bg-info navbar-dark sticky-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">

                <!-- Brand/logo -->
                <a class="navbar-brand" href="#"  ><img src="images/kokila/koki (1).png" alt="logo" class="rounded-circle" style="width:50px;"></a>

                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link disabled text-white"><b>Hello</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="homepage.php">Home</a>
                    </li>
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">
                            Creative
                        </a>
                        <div class="dropdown-menu bg-info ">
                            <a class="dropdown-item text-dark" href="#">Potraits</a>
                            <a class="dropdown-item text-dark" href="#">Commisioned Drawings</a>
                            <a class="dropdown-item text-dark" href="#">Mobiles</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="portfolio.php">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="Loginout.php">Logout</a>
                    <li>
                        <?php include 'login.php';
                        ?>
                    </li>
                </ul>
            </div>
        </nav>
    </body>
</html>
