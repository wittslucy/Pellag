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
                            <img class="img-responsive" width="100px" height="100px" src="views/images/carousel/paula.jpg"
                                 alt="First slide - Paula">
                        </div>
                        <div class="wrapper-team-description">
                            <div class="team-description-title">
                                <h1>Paula</h1>
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
                            <img class="img-responsive" width="100px" height="100px" src="views/images/carousel/emma.jpg"
                                 alt="Second slide - Emma">
                        </div>
                        <div class="wrapper-team-description">
                            <div class="team-description-title">
                                <h1>Emma</h1>
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
                            <img class="img-responsive" width="100" height="100" src="views/images/testC.jpeg"
                                 alt="Third slide - Lucy">
                        </div>
                        <div class="wrapper-team-description">
                            <div class="team-description-title">
                                <h1>Lucy</h1>
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
                            <img class="img-responsive" width="100" height="100" src="views/images/Bourneville.jpeg"
                                 alt="Fourth slide - Louise">
                        </div>
                        <div class="wrapper-team-description">
                            <div class="team-description-title">
                                <h1>Louise</h1>
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
                            <img class="img-responsive" width="100px" height="100px" src="views/images/carousel/alex.jpg"
                                 alt="Fifth slide - Alex">
                        </div>
                        <div class="wrapper-team-description">
                            <div class="team-description-title">
                                <h1>Alex</h1>
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
                            <img class="img-responsive" width="100px" height="100px" src="views/images/carousel/gillian.jpeg"
                                 alt="Sixth slide - Gillian">
                        </div>
                        <div class="wrapper-team-description">
                            <div class="team-description-title">
                                <h1>Gillian</h1>
                            </div>
                            <div class="team-description-text">
                                <p>It's awesome to write some stuff</p>
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