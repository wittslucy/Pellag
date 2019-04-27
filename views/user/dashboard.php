<?php if (!isset($_SESSION['user_id'])) {
    header('Location: /pellag/index.php?controller=User&action=logIn', true, 302);
} ?>

<div class="dashboardheader">
    <h2>Welcome, <?php echo $_SESSION['first_name']; ?>!</h2>
</div>

<div class="dashboardrow">
    <div class="dashboardleftcolumn">
        <div class="container" style="padding: 0">
            <?php if ($myPosts === []) : ?>
                <div class="dashboardcard">
                    <li class="list-group-item">
                        <p>You have no posts yet... Let's get started!</p>
                        <a href="index.php?controller=Post&action=create" class="btn btn-primary">Create</a>
                    </li>
                </div>
            <?php else: ?>

                <?php foreach ($myPosts as $Post) : ?>
                    <div class="dashboardcard">
                        <ul>
                            <li class="list-group-item"><?= $Post['post_title'] ?><br>
                                <small> created on <?= $Post['date_created']; ?>
                                    by <?= $Post['first_name']; ?> <?= $Post['last_name']; ?></small>
                                <button type="button" class="btn btn-info collapsed" data-toggle="collapse"
                                        data-target="#mypost-<?= $Post['post_id']; ?>">
                                    Open
                                </button>
                                <div id="mypost-<?= $Post['post_id']; ?>" class="collapse">
                                    <?= $Post['post_content']; ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                <?php endforeach; ?>
            <?php endif ?>
        </div>
    </div>

    <div class="dashboardrightcolumn">
        <div class="dashboardcard">
            <div id="search-box-container">
                <h5><label>SEARCH POSTS</label></h5>
                <input type="text" id="search-data" name="searchData"
                       placeholder="Post Title..."
                       autocomplete="off"/>
                <small class="form-text text-muted">Word length should be greater than 3</small>
            </div>
            <div id="search-result-container" style="display:none; ">
            </div>
        </div>

        <div class="dashboardcard">
            <h5>ABOUT ME</h5>
            <div class="dashboardfakeimg" style="height:100px;">Image</div>

            <?php if ($_SESSION['bio']) : ?>
                <div style="margin: 1rem auto">
                    <blockquote class="author-bio">
                        <?= $_SESSION['bio']; ?>
                    </blockquote>
                    <a href="index.php?controller=User&action=editBio" class="btn btn-primary">EDIT</a>
                </div>
            <?php else : ?>
                <div style="margin: 1rem auto">
                    <blockquote class="author-bio">
                        No bio written yet...
                    </blockquote>
                    <a href="index.php?controller=User&action=editBio" class="btn btn-primary">ADD</a>
                </div>
            <?php endif ?>

        </div>
        <div class="dashboardcard">

            <h5>MOST RECENT POSTS</h5>

            <ul class="list-group list-group-flush">
                <?php foreach ($allPosts as $Post) : ?>
                    <li class="list-group-item"><?= $Post['post_title']; ?><br>
                        <small> created on <?= $Post['date_created']; ?>
                            by <?= $Post['first_name']; ?> <?= $Post['last_name']; ?></small>
                    </li>
                <?php endforeach; ?>
            </ul>
            <p></p>
            <a href="index.php?controller=Post&action=readAll" class="btn btn-primary">ALL POSTS</a>
        </div>

        <div class="dashboardcard">
            <h5>FOLLOW ME</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"></i>
                    <?php if ($_SESSION['instagram_handle']): ?>

                        <div class="buttons">
                            <a href="https://www.twitter.com/<?= $_SESSION['twitter_handle']; ?>"><i
                                        class="fab fa-twitter fa-2x"></i> <?= $_SESSION['twitter_handle']; ?></a>
                            <a href="index.php?controller=User&action=editTwitter" class="btn btn-primary"> EDIT</a>
                        </div>

                    <?php else : ?>
                        <p><i class="fab fa-twitter fa-2x"></i> No account linked</p>
                        <a href="index.php?controller=User&action=editTwitter" class="btn btn-primary"> ADD</a>
                    <?php endif ?>
                </li>

                <li class="list-group-item"></i>
                    <?php if ($_SESSION['instagram_handle']): ?>
                        <div class="buttons">
                            <a href="https://www.instagram.com/<?= $_SESSION['instagram_handle']; ?>"><i
                                        class="fab fa-instagram fa-2x"> <?= $_SESSION['instagram_handle']; ?></a>
                            <a href="index.php?controller=User&action=editInstagram" class="btn btn-primary"> EDIT</a>
                        </div>
                    <?php else : ?>
                        <p><i class="fab fa-instagram fa-2x"></i> No account linked</p>
                        <a href="index.php?controller=User&action=editInstagram" class="btn btn-primary"> ADD</a>
                    <?php endif ?>
                </li>
            </ul>

        </div>
    </div>
</div>


