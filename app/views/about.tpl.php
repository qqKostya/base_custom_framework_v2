<?php require_once __DIR__ . '/incs/header.php'; ?>
<main class="main py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?= $post; ?>
            </div>
            <?php require_once __DIR__ . '/incs/sidebar.php'; ?>
        </div>
    </div>
</main>
<?php require_once __DIR__ . '/incs/footer.php'; ?>