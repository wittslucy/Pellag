
<div class="form-container">
    <p>This is the requested Post:</p>

    <p>Post ID: <?php echo $individualPost['post_id']; ?></p>
    <p>Post Title: <?php echo $individualPost['post_title']; ?></p>
    <p>Post Content: <?php echo $individualPost['post_content']; ?></p>
<!--    <?php $file = 'views/images/' . $post->name . '.jpeg'; ?>

    <?php if (file_exists($file)) : ?>
        <img src='$file' width='150'/>
    <?php else : ?>
        <img src='views/images/standard/_noproductimage.png' width='150'/>
    <?php endif; ?>
-->
    <a class="btn btn-secondary"
        href='?controller=Post&action=delete&post_id=<?php echo $individualPost['post_id']; ?>'>
        Delete Post
    </a>
<!--    <a class="btn btn-secondary"
        href='?controller=Post&action=update&post_id=<?php echo $individualpost['post_id']; ?>'>
        Update Post
    </a>
-->
</div>
	
