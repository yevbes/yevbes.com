<div class="col-md-3 right-sidebar">

    <aside class="sidebar">
        <form class="search">
            <input class="searchTerm noselect" placeholder="Enter your search term ..." required/><input
                    class="searchButton" type="submit"/>
        </form>
        <div class="category noselect">
            <h3>Categories</h3>
            <?php $metodos = new Metodos($mysqli); ?>
            <?php
            $result = $metodos->getCategories();
            while ($cat = $result->fetch_assoc()) {
                ?>
                <ul id="accordion-des">
                    <li><a href="#"><?php echo $cat["title"]; ?></a>
                        <ul class="inside-category">
                            <li><a href="/categorie.php?id=<?php echo $cat['id']; ?>"><?php echo $cat['id']; ?></a></li>
                        </ul>
                    </li>
                </ul>
            <?php }
            $result->close(); ?>
        </div>
        <div>
            <h3>Recent articles</h3>
            <ul>
                <?php

                //$result = R::findAll('articles','ORDER BY pubdate DESC LIMIT 5');
                $result = $metodos->getRecentArticles(5);
                while ($art = $result->fetch_assoc()) {
                    ?>
                    <li><?php echo $art['title']; ?></li>
                <?php }
                $result->close(); ?>
            </ul>
        </div>
        <div>
            <h3>Popular articles</h3>
            <ul>
                <?php
                //$result = R::findAll('articles','ORDER BY views DESC LIMIT 5');
                $result = $metodos->getPopularArticles(5);
                while ($art = $result->fetch_assoc()) {
                    ?>
                    <li><?php echo $art['title']; ?></li>
                <?php }
                $result->close(); ?>
            </ul>
        </div>
        <div>
            <h3>Join Me</h3>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <img src="../img/gitlab.png" alt="GitLab" class="img-responsive">
                    </div>
                    <div class="col-md-9">
                        <p>Yevgeniy Bespal</p>
                        <p>@yevbes</p>
                    </div>
                </div>
                <div>
                    <button>GitLab</button>
                </div>
            </div>
        </div>
    </aside>
</div>


