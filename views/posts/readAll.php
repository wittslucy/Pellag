<?php if (!isset($_SESSION['user_id'])) {
    header('Location: /pellag/index.php?controller=User&action=logIn', true, 302);
} ?>

<?php if (isset($allPosts) && is_array($allPosts) && count($allPosts) !== 0) : ?>
    <?php foreach ($allPosts as $Post) : ?>
        <div class="card card-post">
            <div class="card-header">
                <h5 class="card-title"><?= $Post['post_title']; ?></h5>
            </div>
            <div class="card-body">
                <p class="card-text post-text text-truncate"
                   style="word-wrap: break-word;"><?= $Post['post_content']; ?></p>
                <div class="btn-group-sm" role="group" aria-label="Basic example">
                    <a class="btn btn-secondary"
                       href='?controller=Post&action=read&post_id=<?= $Post['post_id']; ?>'>
                        READ MORE
                    </a>
                    <a class="btn btn-secondary"
                       href='?controller=Comment&action=showAllComments&post_id=<?= $Post['post_id']; ?>'>
                        <i class="far fa-comments"></i> <?= $Post['allCommentsCounts']; ?></a>

                </div>

            </div>
            <div class="card-footer">
                <small class="text-muted">Created on <?= $Post['date_created']; ?>
                    by <?= $Post['first_name'] . ' ' . $Post['last_name']; ?></small>
            </div>
        </div>
    <?php endforeach; ?>

<?php else : ?>
    <div class="dashboardcard">
        <ul>
            <li class="list-group-item">
                <p>You have no posts yet... Let's get started!</p>
                <a href="index.php?controller=Post&action=create" class="btn btn-primary">Create</a>
            </li>
        </ul>
    </div>
<?php endif; ?>

