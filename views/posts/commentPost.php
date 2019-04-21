<div class="form-container">
    <h2>Create a new comment:</h2>
    <?php if ($_SESSION['user_id']) : ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="comment_content">Write your stuff</label>
            <textarea rows="3" maxlength="250" class="md-textarea form-control" name="comment_content" id="comment_content" placeholder="Post Content"></textarea>
            <small class="form-text text-muted">250 characters</small>
        </div>

        <button type="submit" name="create_comment" class="btn btn-primary">Publish Comment</button>

    </form>
    <?php endif ?>
</div>