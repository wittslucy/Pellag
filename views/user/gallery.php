
   <?php foreach ($allImages as $Image) : ?>   
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="<?php echo $Image['image_name']; ?>"  width='150' height='100'  />
    <div class="card-body">
      <h5 class="card-title"><?= $Image['image_title']; ?></h5>
      <p class="card-text"><?= $Image['image_description']; ?></p>
      <p class="card-text"><?= $Image['date_added']; ?></p>
      <p class="card-text"><?= $Image['user_id']; ?></p>
     
    </div>
  </div>
</div>
      <?php endforeach; ?>