<div class="form-container">


    <p>Here is a list of all products:</p>

    <?php print_r($allPosts); ?>

    <?php foreach ($allPosts as $Post) : ?>
        <p>
            <?php echo $Post->post_title; ?>
            <a href='?controller=post&action=read&id=<?php echo $Post->post_id; ?>'>See product information</a> &nbsp;
            &nbsp;
            <a href='?controller=post&action=delete&id=<?php echo $Post->post_id; ?>'>Delete Product</a> &nbsp; &nbsp;
            <a href='?controller=post&action=update&id=<?php echo $Post->post_id; ?>'>Update Product</a> &nbsp;
        </p>
    <?php endforeach; ?>

</div>
