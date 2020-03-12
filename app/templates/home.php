<div class="col-md-8">

    <?php
    foreach ($data as $article) {
        ?>
        <article class="post">
            <div class="post-thumb">
                <a href="<?= $article["link"]; ?>"><img src="<?= $article["img"]; ?>" alt=""></a>

                <a href="<?= $article["link"]; ?>" class="post-thumb-overlay text-center">
                    <div class="text-uppercase text-center">View Post</div>
                </a>
            </div>
            <div class="post-content">
                <header class="entry-header text-center text-uppercase">
                    <h6><a href="#"> <?= $article["category"]; ?></a></h6>

                    <h1 class="entry-title"><a href="<?= $article["link"]; ?>"><?= $article["title"]; ?></a></h1>


                </header>
                <div class="entry-content">
                    <p><?= $article["text"]; ?>
                    </p>

                    <div class="btn-continue-reading text-center text-uppercase">
                        <a href="<?= $article["link"]; ?>" class="more-link">Continue Reading</a>
                    </div>
                </div>
                <div class="social-share">
                    <span class="social-share-title pull-left text-capitalize">By <a href="#"><?= $article["author"]; ?></a> On <?= $article["date"]; ?></span>
                    <ul class="text-center pull-right">
                        <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </article>

        <?php
    }

    ?>
    <ul class="pagination">
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
    </ul>
</div>