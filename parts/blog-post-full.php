<?php
//$result = $mysqli->query('select articles.id AS artid
//,articles.title AS title,
// articles.image AS imgart ,
// articles.text AS text,
// articles_categories.title AS titlecat,
// articles.pubdate AS date,
//articles_categories.image AS image from articles JOIN articles_categories WHERE articles.categorie_id = articles_categories.id AND articles.id = '.$id);
$metodos = new Metodos($mysqli);
$result = $metodos->getArticleById(@$_GET['id']);


if ($result->num_rows == 0) { ?>
    <h2>Result not found</h2>
    <div class="full-width">
        <img src="../img/404.png" class="img-responsive"/>
    </div>
    <h3>404 - Article not found</h3>

    <br>
    <a href="../releases.php" class="btn btn-small btn-dark-solid  "> Go back</a>
<?php } else {
    $art = $result->fetch_assoc();
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
                            href="../releases.php?catid=<?php echo $art['catid']; ?>"><?php echo $art['titlecat']; ?></a>
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
            <a href="../releases.php" class="btn btn-small btn-dark-solid  "> Go back</a>
        </div>
    </div>
<?php }
$result->close(); ?>