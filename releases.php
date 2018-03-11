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
    <title>Releases | <?php echo $config['site_title']; ?></title>
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
<div class="container-fluid post-area-design">
    <div class="container">
        <div class="row">
            <div class="col-md-9 post-area">
                <?php include "parts/blog-post.php" ?>
            </div>
            <?php include('parts/right-blog-sidebar.php'); ?>
        </div>
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
<script src="js/motor.js" type="text/javascript"></script>
<script src="js/jquery.tagcanvas.min.js" type="text/javascript"></script>
</body>
</html>
