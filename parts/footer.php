<?php $metodos = new Metodos($mysqli); ?>
<footer class="container-fluid footer-section-design noselect">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-content-design">
                <h4>Links</h4>
                <div class="content-widget-design">
                    <ul class="footer-nav-design">
                        <?php
                        //$pg = basename($_SERVER['REQUEST_URI']);
                        $pg = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
                        $allow = $config['menu_items'];
                        if (!in_array($pg, $allow)) {
                            $pg = 'default_value';
                        }
                        ?>

                        <li class="<?php if ($pg == 'index.php' || $pg == 'default_value') {
                            echo 'active-item-design';
                        } ?>"><a href="index.php">Home</a></li>
                        <li class="<?php if ($pg == 'resume.php') {
                            echo 'active-item-design';
                        } ?>"><a href="resume.php">Resume</a></li>
                        <li class="<?php if ($pg == 'releases.php' || $pg == 'article.php') {
                            echo 'active-item-design';
                        } ?>"><a href="releases.php">Releases</a></li>
                        <li class="<?php if ($pg == 'projects.php') {
                            echo 'active-item-design';
                        } ?>"><a href="projects.php">Projects</a></li>
                        <li class="<?php if ($pg == 'contact.php') {
                            echo 'active-item-design';
                        } ?>"><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-content-design">
                <h4>My Releases</h4>
                <div class="content-widget-design">
                    <ul class="tab-design">
                        <li class="active-design"><a id="tabTitle1" onclick="tabOption(this.id)">Popular</a></li>
                        <li><a id="tabTitle2" onclick="tabOption(this.id)">Recent</a></li>
                        <!--li><a>Comments</a></--li-->
                    </ul>
                    <div class="tabcontent-general-design">
                        <div class="tabcontent-design active-design" id="tab1">
                            <?php $result = $metodos->getPopularArticlesFlag(3);
                            while ($art = $result->fetch_assoc()) { ?>
                                <h3><a href="../article.php?id=<?php echo $art['artid']; ?>"
                                       style="color: #D4D4D4"><?php echo $art['title']; ?></a></h3>
                                <p><?php echo $art['text'] . '...'; ?></p>
                            <?php }
                            $result->close(); ?>
                        </div>
                        <div class="tabcontent-design" id="tab2">
                            <?php $result = $metodos->getRecentArticlesFlag(3);
                            while ($art = $result->fetch_assoc()) { ?>
                                <h3><a href="../article.php?id=<?php echo $art['artid']; ?>"
                                       style="color: #D4D4D4"><?php echo $art['title']; ?></a></h3>
                                <p><?php echo $art['text'] . '...'; ?></p>
                            <?php }
                            $result->close(); ?>
                        </div>
                        <!--div class="tabcontent-design" id="tab3">
                            <h3>Tab 3</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis nesciunt, deleniti odit
                                iure hic?</p>
                        </div-->
                    </div>
                </div>
            </div>
            <script>
                function tabOption(id) {
                    var elem;
                    if (id === "tabTitle1") {
                        elem = $("#tabTitle2").parent();
                        $(elem).removeClass("active-design");
                        elem = $("#tab2");
                        $(elem).removeClass("active-design");

                        elem = $("#" + id).parent();
                        $(elem).addClass("active-design");
                        elem = $("#tab1");
                        $(elem).addClass("active-design");
                    } else {
                        elem = $("#tabTitle1").parent();
                        $(elem).removeClass("active-design");
                        elem = $("#tab1");
                        $(elem).removeClass("active-design");

                        elem = $("#" + id).parent();
                        $(elem).addClass("active-design");
                        elem = $("#tab2");
                        $(elem).addClass("active-design");
                    }
                }
            </script>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-content-design">
                <h4>Tag cloud</h4>
                <div class="content-widget-design row tag-cloud-design">
                    <div id="cloudCanvas" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-centered">
                        <div id="myCanvasContainer">
                            <canvas width="310" height="270px" id="myCanvas">
                                <p>Anything in here will be replaced on browsers that support the canvas element</p>
                            </canvas>
                        </div>

                        <!-- DYNAMIC TAGS -->
                        <div id="tags">
                            <ul>
                                <?php
                                $result = $metodos->getTags();
                                //$result = $mysqli->query('select * from articles ORDER BY pubdate DESC LIMIT 5');
                                /*$result = R::exec('');*/
                                while ($key = $result->fetch_assoc()) {
                                    ?>
                                    <li>
                                        <a href="/article.php?id=<?php echo $key['article']; ?>"><?php echo $key['title']; ?></a>
                                    </li>
                                <?php }
                                $result->close(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>