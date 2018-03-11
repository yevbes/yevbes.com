<?php
$metodos = new Metodos($mysqli);
$per_page = 3;
$page = 1;
$flag = true;
if (isset($_GET['page'])) {
    $page = (int)$_GET['page'];
}

if (empty($_GET['catid'])) {

    $total_count_q = $mysqli->query('select COUNT(id) AS total_count from articles');
    $total_count = $total_count_q->fetch_assoc();
    $total_count = $total_count['total_count'];

    $total_pages = ceil($total_count / $per_page);
    if ($page < 1 || $page > $total_pages) {
        $page = 1;
    }
    $offset = ($per_page * $page) - $per_page;

    $result = $metodos->articlesPerPage($offset, $per_page);
} else {
    $id = $_GET['catid'];

    $stmt = $mysqli->prepare('select COUNT(articles.id) AS total_count from articles JOIN articles_categories WHERE articles.categorie_id = articles_categories.id AND articles_categories.id = ?');
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $total_count = $stmt->get_result();
    $stmt->free_result();
    $stmt->close();


    $total_count = $total_count->fetch_assoc();
    $total_count = $total_count['total_count'];

    if ((int)$total_count == 0) {
        $flag = false;
    }

    $total_pages = ceil($total_count / $per_page);
    if ($page < 1 || $page > $total_pages) {
        $page = 1;
    }
    $offset = ($per_page * $page) - $per_page;


    $result = $metodos->categoriesPerPage($id, $offset, $per_page);


}
while ($art = $result->fetch_assoc()) {
    ?>
    <div class="blog-classic">
        <div class="left-side">
            <?php
            $data = date_create($art['date']);
            ?>
            <div class="date">
                <?php echo date_format($data, 'd'); ?>
                <span><?php echo strtoupper(date_format($data, 'M')) . " " . date_format($data, 'Y'); ?></span>
            </div>
            <div class="type">
                <img src="<?php echo $art['image']; ?>" alt="<?php echo $art['titlecat']; ?>"/>
            </div>
        </div>
        <div class="blog-post">
            <div class="full-width">
                <img src="<?php echo $art['imgart']; ?>" alt="<?php echo $art['titlecat']; ?>" class="img-responsive"/>
            </div>
            <h4 class="text-uppercase"><a
                        href="../article.php?id=<?php echo $art['artid']; ?>"><?php echo $art['title']; ?></a></h4>
            <ul class="post-meta">
                <li><i class="fa fa-user"></i>posted by <a href="../resume.php">Yevgeniy Bespal</a></li>
                <li><i class="fa fa-folder-open"></i> <a
                            href="/releases.php?catid=<?php echo $art['catid']; ?>"><?php echo $art['titlecat']; ?></a>
                </li>
                <!--li><i class="fa fa-comments"></i> <a href="#">4 comments</a></li-->
            </ul>
            <p><?php
                if (strlen($art['text']) >= 500) {
                    echo $art['text'] . "...";
                } else {
                    echo $art['text'];
                }
                ?></p>
            <a href="../article.php?id=<?php echo $art['artid']; ?>" class="btn btn-small btn-dark-solid  "> Continue
                Reading</a>
        </div>
    </div>
<?php }
$result->close(); ?>
<!--classic gallery post-->


<!--classic video post-->
<!--<div class="blog-classic">
    <div class="left-side">
        <div class="date">
            24
            <span>MAR 2015</span>
        </div>
        <div class="type">
            <img src="img/type-post/github.png" alt="Android" />
        </div>
    </div>
    <div class="blog-post">
        <p class="video-fit m-bot-50 embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="//www.youtube.com/embed/Kf8G9AISsD4" allowfullscreen></iframe>
        </p>
        <h4 class="text-uppercase"><a href="blog-single.html">Video post</a></h4>
        <ul class="post-meta">
            <li><i class="fa fa-user"></i>posted by <a href="#">admin</a></li>
            <li><i class="fa fa-folder-open"></i> <a href="#">lifestyle</a>, <a href="#">travel</a>, <a href="#">fashion</a></li>
            <li><i class="fa fa-comments"></i> <a href="#">4 comments</a></li>
        </ul>
        <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
        <a href="blog-single.html" class="btn btn-small btn-dark-solid  "> Continue Reading</a>
    </div>

</div> -->
<!--classic video post-->

<!--classic image gallery post-->
<!--<div class="blog-classic">
    <div class="left-side">
        <div class="date">
            24
            <span>MAR 2015</span>
        </div>
        <div class="type">
            <img src="img/type-post/ios.png" alt="Android" />
        </div>
    </div>
    <div class="blog-post">
        <div class="full-width">
            <img src="img/pluma.jpg" alt="" />
        </div>
        <h4 class="text-uppercase"><a href="blog-single.html">gallery post</a></h4>
        <ul class="post-meta">
            <li><i class="fa fa-user"></i>posted by <a href="#">admin</a></li>
            <li><i class="fa fa-folder-open"></i> <a href="#">lifestyle</a>, <a href="#">travel</a>, <a href="#">fashion</a></li>
            <li><i class="fa fa-comments"></i> <a href="#">4 comments</a></li>
        </ul>
        <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
        <a href="blog-single.html" class="btn btn-small btn-dark-solid  "> Continue Reading</a>
    </div>
</div>-->
<!--classic image gallery post-->

<!--classic post without image-->
<!--<div class="blog-classic">
    <div class="left-side">
        <div class="date">
            24
            <span>MAR 2015</span>
        </div>
        <div class="type">
            <img src="img/type-post/OSX.png" alt="Android" />
        </div>
    </div>
    <div class="blog-post">
        <h4 class="text-uppercase"><a href="blog-single.html">blog post without photo</a></h4>
        <ul class="post-meta">
            <li><i class="fa fa-user"></i>posted by <a href="#">admin</a></li>
            <li><i class="fa fa-folder-open"></i> <a href="#">lifestyle</a>, <a href="#">travel</a>, <a href="#">fashion</a></li>
            <li><i class="fa fa-comments"></i> <a href="#">4 comments</a></li>
        </ul>
        <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. <a>Sed ut perspiciatis unde</a> omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
        <a href="blog-single.html" class="btn btn-small btn-dark-solid  "> Continue Reading</a>
    </div>
</div>-->
<!--classic post without image-->
<div class="buttons-nav">
    <ul>
        <style>
            .isDisabled {
                border: none !important;
                pointer-events: none;
                /* Disables the button completely. Better than just cursor: default; */
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=70);
                opacity: 0.7;
            }

            .auxClass {
                border: none !important;
            }
        </style>
        <?php
        if ($flag) {
            if (isset($_GET['catid'])) {
                $catUrl = "catid={$id}&";
            } else {
                $catUrl = "";
            }

            if ($page > 1) {
                echo '<li><a class="auxClass" href="/releases.php?' . $catUrl . 'page=' . ($page - 1) . '">&#60; &nbsp; Previous</a></li>';
            } else {
                echo '<li><a class="isDisabled" href="javascript:;">&#60; &nbsp; Previous</a></li>';
            }

            for ($i = 1; $i <= $total_pages; $i++) { ?>
                <li>
                    <a <?php if ($i === $page) echo 'style="color: #9CDAF1 !important; border-color: #9CDAF1 !important"'; ?>
                            href="/releases.php?<?php echo $catUrl; ?>page=<?php echo $i; ?>">
                        <?php echo($i) ?>
                    </a>
                </li>
            <?php }
            if ($page < $total_pages) {
                echo '<li><a class="auxClass" href="/releases.php?' . $catUrl . 'page=' . ($page + 1) . '">Next &nbsp; &#62;</a></li>';
            } else {
                echo '<li><a class="isDisabled" href="javascript:;">Next &nbsp; &#62;</a></li>';
            }
        } else {
            ?>
            <h2 style="text-align: left">Result not found</h2>
            <div class="full-width">
                <img src="../img/404.png" class="img-responsive"/>
            </div>
            <h3 style="text-align: left">404 - Category not found</h3>

            <br>
            <a style="float: left" href="../releases.php" class="btn btn-small btn-dark-solid  "> Go back</a>
        <?php }
        ?>
    </ul>
</div>
