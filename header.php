<?php
$page = basename($_SERVER['PHP_SELF']);  
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/header.css">

</head>

<body>

    <header>
        <nav class="navbar">

            <ul class="nav_menu">
                <li class="nav_item"> <a class="btn <?php if($page == 'index.php'){echo "active";}?>" href="index.php"> Home </a> </li>
                <li class="nav_item"> <a class="btn <?php if($page == 'bio.php'){echo "active";}?>" href="bio.php"> Bio </a> </li>
                <li class="nav_item"> <a class="btn <?php if($page == 'projects.php'){echo "active";}?>" href="projects.php"> Projects </a> </li>
                <li class="nav_item"> <a class="btn <?php if($page == 'contact.php'){echo "active";}?>" href="contact.php"> Contact </a> </li>
                <li class="nav_item"> <a class="btn <?php if($page == 'blog.php'){echo "active";}?> disabled"> Blog </a> </li>
            </ul>

            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

            <div class="icons">
                <a target="_blank" href="mailto:abdulhannan8540680@gmail.com"> <img src="assets/icons/mail.png" alt=""> </a>
                <a target="_blank" href="https://github.com/Rocky-Khan"> <img src="assets/icons/github.png" alt=""> </a>
                <a target="_blank" href="https://www.linkedin.com/in/abdul-hannan-8a78b01bb/"> <img src="assets/icons/linkedin.png" alt=""> </a>
            </div>

        </nav>
    </header>

    <script src="scripts/header.js"></script>
    
</body>

</html>