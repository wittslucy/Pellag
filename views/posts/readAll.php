<div class="form-container">

    <p>Here is a list of all Posts:</p>

    <div class="card-deck">

        <?php foreach ($allPosts as $Post) : ?>
            <div class="card">
                <div class="card-body">
                    <div class="btn-group-sm" role="group" aria-label="Basic example">
                        <a class="btn btn-secondary"
                           href='?controller=Post&action=read&post_id=<?php echo $Post['post_id']; ?>'>
                            View
                        </a>
                    </div>
                    <h5 class="card-title"><?php echo $Post['post_title']; ?></h5>
                    <p class="card-text"><?php echo $Post['post_content']; ?></p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Created on <?php echo $Post['date_created']; ?>
                        by <?php echo $Post['first_name'] . ' ' . $Post['last_name']; ?></small>
                </div>
            </div>

        <?php endforeach; ?>
    </div>

</div>
