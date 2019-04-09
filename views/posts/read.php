<div class="form-container">
    <p>This is the requested product:</p>

    <p>Product ID: <?php echo $product->id; ?></p>
    <p>Product Name: <?php echo $product->name; ?></p>
    <p>Product Price: £<?php echo $product->price; ?></p>
    <?php $file = 'views/images/' . $product->name . '.jpeg'; ?>

    <?php if (file_exists($file)) : ?>
        <img src='$file' width='150'/>
    <?php else : ?>
        <img src='views/images/standard/_noproductimage.png' width='150'/>
    <?php endif; ?>
</div>
	
