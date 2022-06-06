<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
    <div class="main">
        <div class="container">
            <div class="main-content">
                <div>
                    <h1 class="post-title"><?php $this->title() ?></h1>
                </div>
                <div class="content" itemprop="articleBody">
                    <?php $this->content(); ?>
                </div>
            </div>
        </div>
        <?php $this->need('comments.php'); ?>
        <div class="container">
            <?php $this->need('footer.php'); ?>
        </div>
    </div>
</div>
</body>
</html>
