<?php require_once VIEWS . '/incs/header.php'; ?>
<main class="main py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?= $post['title'] ?></h1>
                <?= $post['content']; ?>
            </div>
        </div>
    </div>
</main>
<?php require_once VIEWS . '/incs/footer.php'; ?>