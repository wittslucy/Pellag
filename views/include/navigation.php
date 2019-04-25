<div class="jumbotron jumbotron-nav">
    <img src="views/images/pellag-logo.png" href="index.php?controller=Pages&action=home" alt="Banner" class="img-responsive">


    <nav class="navbar navbar-expand-lg navbar-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?= ($CURRENT_PAGE === 'home') ? 'active' : ''; ?>"
                       href="index.php?controller=Pages&action=home">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($CURRENT_PAGE === 'readAll') ? 'active' : '' ?>"
                       href="index.php?controller=Post&action=readAll"><i class="fas fa-columns"></i> ALL POSTS</a>
                </li>
                <?php if (isset($_SESSION['user_id']) === true) : ?>
                    <li class="nav-item">
                        <a class="nav-link <?= ($CURRENT_PAGE === 'create') ? 'active' : '' ?>"
                           href="index.php?controller=Post&action=create"><i class="fas fa-feather-alt"></i> CREATE NEW POST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($CURRENT_PAGE === 'dashboard') { ?> active <?php } ?>"
                           href="index.php?controller=User&action=dashboard"><i class="fas fa-user"></i> DASHBOARD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($CURRENT_PAGE === 'logOut') ? 'active' : '' ?>"
                           href="index.php?controller=User&action=logOut"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link <?= ($CURRENT_PAGE === 'registerUser') ? 'active' : '' ?>"
                           href="index.php?controller=User&action=registerUser"><i class="fas fa-user-plus"></i> REGISTER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($CURRENT_PAGE === 'logIn') ? 'active' : '' ?>"
                           href="index.php?controller=User&action=logIn"><i class="fas fa-sign-in-alt"></i> LOGIN</a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>

    </nav>
</div>



