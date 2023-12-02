<?php require_once VIEWS . '/incs/header.php';
/**
 * @var $posts
 * @var $pages_cnt
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

                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href=<?= "?page=1" ?> aria-label="Previous">
                                    First page
                                </a>
                            </li>
                            <?php for ($i = 1; $i <= $pages_cnt; $i++): ?>
                                <li class="page-item"><a class="page-link" href=<?= "?page={$i}" ?>><?= $i ?></a></li>
                            <?php endfor; ?>
                            <li class="page-item">
                                <a class="page-link" href=<?= "?page=$pages_cnt" ?> aria-label="Next">
                                    Last page
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
                <?php require_once VIEWS . '/incs/sidebar.php'; ?>
            </div>
        </div>
    </main>
<?php require_once VIEWS . '/incs/footer.php'; ?>