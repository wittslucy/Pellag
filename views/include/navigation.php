<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link <?php if ($CURRENT_PAGE === 'home') { ?> active <?php } ?>"
                   href="?controller=Pages&action=home">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($CURRENT_PAGE === 'readAll') { ?> active <?php } ?>"
                   href="?controller=Post&action=readAll">ALL POSTS</a>
            </li>
            <?php if (isset($_SESSION['user_id']) === true) : ?>
                <li class="nav-item">
                    <a class="nav-link <?php if ($CURRENT_PAGE === 'create') { ?> active <?php } ?>"
                       href="?controller=Post&action=create">CREATE NEW POST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($CURRENT_PAGE === 'logOut') { ?> active <?php } ?>"
                       href="?controller=User&action=logOut">LOGOUT</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link <?php if ($CURRENT_PAGE === 'logIn') { ?> active <?php } ?>"
                       href="?controller=User&action=logIn">LOGIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($CURRENT_PAGE === 'registerUser') { ?> active <?php } ?>"
                       href="?controller=User&action=registerUser">REGISTER</a>
                </li>
            <?php endif; ?>


        </ul>
    </div>

</nav>
