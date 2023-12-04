<?php require_once VIEWS . '/incs/header.php';
/**
 * @var $posts
 * @var $pages_cnt
 * @var $pagination
 */
?>
    <main class="main py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <?php foreach ($posts as $post) : ?>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><a
                                            href="posts?id=<?= $post['id'] ?>"><?= h($post['title']) ?></a>
                                </h5>
                                <p class="card-text"><?= $post['excerpt'] ?></p>
                                <a href="posts?id=<?= $post['id'] ?>" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <hr>

                    <?= $pagination ?>

                </div>
                <?php require_once VIEWS . '/incs/sidebar.php'; ?>
            </div>
        </div>
    </main>
<?php require_once VIEWS . '/incs/footer.php'; ?>