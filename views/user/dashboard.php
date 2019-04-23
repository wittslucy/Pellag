
<body class="dashboardbody">
<div class="dashboardheader">
  <h2>Welcome, <?php echo $_SESSION['first_name'];?>!</h2>
</div>

<div class="dashboardrow">
  <div class="dashboardleftcolumn">
      <div class="container">
          <?php if($myPosts == []){ ?>
              <div class="dashboardcard">
                <li class="list-group-item">
                    <p>You have no posts</p>
                </li>
              </div>
           <?php } ?>
           
        
        <?php foreach ($myPosts as $Post) : ?>
          <div class="dashboardcard">
            <li class="list-group-item"><?= $Post['post_title']?><br><small> created on <?= $Post['date_created']; ?> by <?= $Post['first_name']; ?> <?= $Post['last_name']; ?></small>
                <button type="button" class="btn btn-info collapsed" data-toggle="collapse" data-target="#mypost-<?=$Post['post_id']; ?>">
                    Open
                </button>
                <div id="mypost-<?=$Post['post_id']; ?>" class="collapse">
                    <?=$Post['post_content']; ?>
                </div>
            </li>
          </div>
        <?php endforeach; ?>
       </div>
  </div>
  <div class="dashboardrightcolumn">
    <div class="dashboardcard">
      <h2>About Me</h2>
      <div class="dashboardfakeimg" style="height:100px;">Image</div>
      <p><?php echo $_SESSION['bio'];?></p>
    </div>
    <div class="dashboardcard">
        
        
      <h3>Recent Posts</h3>
      <div class="card-body">
        <ul class="list-group list-group-flush">
            <?php foreach ($allPosts as $Post) : ?>
            <li class="list-group-item"><?= $Post['post_title']; ?><br><small> created on <?= $Post['date_created']; ?> by <?= $Post['first_name']; ?> <?= $Post['last_name']; ?></small></li>
            <?php endforeach; ?>
        </ul>
            <p></p>
            <a href="index.php?controller=Post&action=readAll" class="btn btn-primary">ALL POSTS</a>
     </div>
  
    </div>
    <div class="dashboardcard">
      <h3>Follow Me</h3>
      <p>Twitter:</p>
      <p>Instagram:</p>
    </div>
  </div>
</div>
</body>

