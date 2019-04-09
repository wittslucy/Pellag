<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link <?php if ($CURRENT_PAGE === 'home') { ?> active <?php }?>" href="?controller=Pages&action=home">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($CURRENT_PAGE === 'readAll') { ?> active <?php }?>" href="?controller=Post&action=readAll">ALL PRODUCTS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($CURRENT_PAGE === 'create') { ?> active <?php }?>" href="?controller=Post&action=create">CREATE NEW PRODUCT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($CURRENT_PAGE === 'login') { ?> active <?php }?>" href="?controller=Pages&action=logIn">LOGIN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($CURRENT_PAGE === 'register') { ?> active <?php }?>" href="?controller=Pages&action=registerUser">REGISTER</a>
            </li>

        </ul>
    </div>

</nav>
