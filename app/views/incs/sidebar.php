<div class="col-md-4">
    <h3>Recent Posts</h3>
    <ul class="list-group">
        <?php foreach ($recent_posts as $recent_post) : ?>
            <li class="list-group-item"><a href="post?<?= $recent_post['id'] ?>">
                    <?= $recent_post['slug'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>