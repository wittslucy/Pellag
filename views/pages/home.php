<div class="container">
    <div class="row home-page-row">
        <div class="item">
            <div class="card">
                <div class="card-header">MOST RECENT POSTS</div>
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
        </div>

        <div class="item">
            <div class="card">
                <div class="card-header">
                    JOIN US
                </div>
                <div class="card-body">
                    <h5 class="card-title">JOIN THE CREATORS</h5>
                    <p class="card-text">Follow the link below to register to our blog</p>
                    <a href="index.php?controller=User&action=registerUser" class="btn btn-primary">REGISTER</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card card-team">
    <div class="card-header">
        MEET THE TEAM
    </div>

    <div class="card-body">
        <div id="meet-the-team-carousel" class="carousel slide" data-ride="carousel" data-interval="5000">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="wrapper-team">
                        <div class="wrapper-team-image">
                            <img class="img-responsive" width="100px" height="100px" src="views/images/KopX.jpeg"
                                 alt="First slide">
                        </div>
                        <div class="wrapper-team-description">
                            <div class="team-description-title">
                                <h1>Hello</h1>
                            </div>
                            <div class="team-description-text">
                                <p>It's awesome to write some stuff</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="wrapper-team">
                        <div class="wrapper-team-image">
                            <img class="img-responsive" width="100px" height="100px" src="views/images/KopX.jpeg"
                                 alt="Second slide">
                        </div>
                        <div class="wrapper-team-description">
                            <div class="team-description-title">
                                <h1>Hello</h1>
                            </div>
                            <div class="team-description-text">
                                <p>It's awesome to write some stuff</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="wrapper-team">
                        <div class="wrapper-team-image">
                            <img class="img-responsive" width="100px" height="100px" src="views/images/KopX.jpeg"
                                 alt="Third slide">
                        </div>
                        <div class="wrapper-team-description">
                            <div class="team-description-title">
                                <h1>Hello</h1>
                            </div>
                            <div class="team-description-text">
                                <p>It's awesome to write some stuff</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="wrapper-team">
                        <div class="wrapper-team-image">
                            <img class="img-responsive" width="100px" height="100px" src="views/images/KopX.jpeg"
                                 alt="Third slide">
                        </div>
                        <div class="wrapper-team-description">
                            <div class="team-description-title">
                                <h1>Hello</h1>
                            </div>
                            <div class="team-description-text">
                                <p>It's awesome to write some stuff</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="wrapper-team">
                        <div class="wrapper-team-image">
                            <img class="img-responsive" width="100px" height="100px" src="views/images/KopX.jpeg"
                                 alt="Fourth slide">
                        </div>
                        <div class="wrapper-team-description">
                            <div class="team-description-title">
                                <h1>Hello</h1>
                            </div>
                            <div class="team-description-text">
                                <p>It's awesome to write some stuff</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="wrapper-team">
                        <div class="wrapper-team-image">
                            <img class="img-responsive" width="100px" height="100px" src="views/images/KopX.jpeg"
                                 alt="Fifth slide">
                        </div>
                        <div class="wrapper-team-description">
                            <div class="team-description-title">
                                <h1>Hello</h1>
                            </div>
                            <div class="team-description-text">
                                <p>It's awesome to write some stuff</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="wrapper-team">
                        <div class="wrapper-team-image">
                            <img class="img-responsive" width="100px" height="100px" src="views/images/KopX.jpeg"
                                 alt="Sixth slide">
                        </div>
                        <div class="wrapper-team-description">
                            <div class="team-description-title">
                                <h1>Hello</h1>
                            </div>
                            <div class="team-description-text">
                                <p>It's awesome to write some stuff</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>