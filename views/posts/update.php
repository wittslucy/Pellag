<div class="form-container card-post">
    <h2>Update post below:</h2>

    <form action="" id="updatepost" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="post_title"></label>
            <input type="text" value="<?= $individualPost['post_title']; ?>" class="form-control" name="post_title" id="post_title" placeholder="Post title"
                   required/>
        </div>
        <div class="form-group">
            <label for="post_content"></label>
            <textarea rows="3" maxlength="2500" class="md-textarea form-control" name="post_content" id="post_content" placeholder="Post Content"><?= $individualPost['post_content']; ?></textarea>
            <small class="form-text text-muted">2500 characters</small>
        </div>

        <input type="submit" id="updatepost" class="btn btn-primary"/>

    </form>
</div>