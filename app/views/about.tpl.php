<?php require_once VIEWS . '/incs/header.php'; ?>
<main class="main py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?= $post; ?>
            </div>
            <?php require_once VIEWS . '/incs/sidebar.php'; ?>
        </div>
    </div>
</main>
<?php require_once VIEWS . '/incs/footer.php'; ?>