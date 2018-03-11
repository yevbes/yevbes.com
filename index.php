<?php require_once('includes/config.php'); ?>
<?php require "includes/db.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Yevgeniy Bespal">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home | <?php echo $config['site_title']; ?></title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Main Style -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="noselect">
<!-- HEAD -->
<?php include('parts/header.php') ?>
<!-- BODY -->
<div id="particles">
</div>

<div class="container-fluid home-full-container-first-section-design">
    <div class="container">
        <section class="row">
            <div class="animation-element slide-left">
                <h2>CREATIVITY</h2>
            </div>
        </section>
    </div>
</div>
<div class="container-fluid blockuote-design">
    <div class="container">
        <section class="row">
            <div class="mb-wrap mb-style-3">
                <blockquote cite="http://www.gutenberg.org/ebooks/1260">
                    <p>The only way to do great work, is to love what you do</p>
                </blockquote>
                <div class="mb-attribution">
                    <p class="mb-author">Steve Jobs</p>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="container-fluid home-full-container-second-section-design">
    <div class="container">
        <section class="row">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <!--<img src="img/dev/android.png" alt="Android Studio">
                <img src="img/dev/eclipse.png" alt="Eclipse">
                <img src="img/dev/netbeans.png" alt="NetBeans">-->
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="animation-element slide-right">
                    <h2>{ CODE }</h2>
                </div>
            </div>
        </section>
    </div>
</div>

<div class="container-fluid home-full-container-third-section-design">
    <div class="container">
        <section class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="animation-element slide-left">
                    <h2>DESIGN</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img src="img/design.png" alt="Design"></div>
        </section>
    </div>
</div>
<div class="container-fluid home-full-container-fourth-section-design">
    <div class="container">
        <section class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <ul>
                    <li>Software</li>
                    <li style="margin-left: 30px;">Devices applications</li>
                    <li style="margin-left: 60px;">WEB</li>
                </ul>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <p>Responsive</p>
                <p style="margin-left: 50px;">Distributed</p>
                <p style="margin-left: 100px;">Multiplataform</p>
            </div>
        </section>
    </div>
</div>

<!-- FOOTER -->
<?php include('parts/footer.php') ?>
<?php include('parts/footer-copyright.php') ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="js/jquery.tagcanvas.min.js" type="text/javascript"></script>
<script src="js/jquery.particleground.min.js" type="text/javascript"></script>
<script src="js/motor.js" type="text/javascript"></script>
<script src="js/homejs.js" type="text/javascript"></script>
<!--<script src="js/test.js" type="text/javascript"></script>-->
<!--<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>-->
<!--<script src='https://www.google.com/recaptcha/api.js?hl=ru'></script>-->
</body>
</html>
