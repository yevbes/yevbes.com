<?php require "includes/Metodos.php" ?>
<header id="header">
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu"><span
                                    class="sr-only">Open navigation</span> <span class="icon-bar"></span> <span
                                    class="icon-bar"></span> <span class="icon-bar"></span></button>
                        <a href="#" class="navbar-brand">Logo</a></div>
                    <div class="collapse navbar-collapse" id="responsive-menu">
                        <ul class="nav navbar-nav">
                            <?php
                            //$pg = basename($_SERVER['REQUEST_URI']);
                            $pg = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

                            $allow = $config['menu_items'];
                            if (!in_array($pg, $allow)) {
                                $pg = 'default_value';
                            }
                            ?>

                            <li class="<?php if ($pg == 'index.php' || $pg == 'default_value') {
                                echo 'active';
                            } ?>"><a href="index.php">Home</a></li>
                            <li class="<?php if ($pg == 'resume.php') {
                                echo 'active';
                            } ?>"><a href="resume.php">Resume</a></li>
                            <li class="<?php if ($pg == 'releases.php' || $pg == 'article.php') {
                                echo 'active';
                            } ?>"><a href="releases.php">Releases</a></li>
                            <li class="<?php if ($pg == 'projects.php') {
                                echo 'active';
                            } ?>"><a href="projects.php">Projects</a></li>
                            <li class="<?php if ($pg == 'contact.php') {
                                echo 'active';
                            } ?>"><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>