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
    <title>Resume | <?php echo $config['site_title']; ?></title>
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
    <style>
        div.hide-item {
            display: none;
        }
    </style>
</head>
<body class="noselect">
<!-- HEAD -->
<?php include('parts/header.php') ?>

<!-- BODY -->
<div class="container-fluid full-container-first-section-design">
    <div class="container container-first-section-design">
        <section class="row">
            <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                <img src="img/port.jpg" alt="It's me" class="img-responsive foto-principal-design"/></div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 defaultcursor">
                <h2 class="description-title-design">Hola Mundo!</h2>
                <p class="description-design">Soy Yevgeniy Bespal y soy ingeniero informático. Graduado en la
                    Universidad Politecnica de Valencia (Escuela Técnica Superior de Ingeniería Informática) como
                    Ingeniero de Software.
                    Llevo mas de 5 años ejerciendo los labores como analista programador al terminar la formación
                    profesional en Aula Campus (Burjasot, Valencia).<br/><br/>
                    Es muy importante hoy en día desarrollar el software de calidad, por ello mi labor para llegar a
                    conseguir este objetivo se basa en pasar por todas las fases del proceso de desarrollo del software.
                    En esta página podreis encontrar varios ejemplos de mis proyectos.</p>
            </div>
        </section>
    </div>
</div>
<div class="container-fluid full-container-second-section-design">
    <div class="container container-second-section-design">
        <section class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img src="img/gitlab.png" alt="octocat"
                                                                    class="img-resposive img-octocat-design"></div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 button-title-joinme-design col-centered">
                <p class="defaultcursor">Join me</p>
                <button id="buttonGitLab">GitLab</button>
                <script type="text/javascript">
                    document.getElementById("buttonGitLab").onclick = function () {
                        window.open("<?php echo $config['gitlab_url']; ?>",
                            "_blank");
                    };
                </script>
            </div>
        </section>
    </div>
</div>
<div class="container-fluid full-container-third-section-design">
    <div class="row header-title-design">
        <h2 class="defaultcursor">My Skills</h2>
    </div>
    <?php include 'parts/slider.php'; ?>
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
