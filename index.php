<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portfolio</title>

    <link rel="stylesheet" href="styles/index.css">

</head>

<body>
    
    <div class="container">

        <?php include("header.php") ?>
        
        <div class="cover">
            
            <div class="head_heading">
                <div class="heading">
                    <h3 class="name_heading">Abdul Hannan</h3>
                    <p class="name_sub_heading">WEB AND APP DEVELOPER</p>
                </div>
            </div>

            <div class="head_text">
                <div class="heading_para">
                    <p class="head_para"> I am a passionate developer, full of motivation to move forward. I have a passion for learning new things and the curiosity is what keeps me going on the journey of development. </p>
                    <div class="icons">
                        <a target="_blank" href="mailto:abdulhannan8540680@gmail.com"> <img src="assets/icons/mail.png" alt=""> </a>
                        <a target="_blank" href="https://github.com/Rocky-Khan"> <img src="assets/icons/github.png" alt=""> </a>
                        <a target="_blank" href="https://www.linkedin.com/in/abdul-hannan-8a78b01bb/"> <img src="assets/icons/linkedin.png" alt=""> </a>
                    </div>
                </div>
            </div>

            <div class="image">
                <img class="myImageTag" class="my_image" src="assets/images/me.png" alt="image"/>
            </div>

        </div>

        <div class="bottom">
            <a href="contact.php" class="btn">
                <img src="assets/images/btn.png" alt="button_works">
            </a>
        </div>

        <?php include("footer.html") ?>

    </div>

    <script src="scripts/index.js"></script>

</body>

</html>