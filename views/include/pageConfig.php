<?php

    switch ($_SERVER['REQUEST_URI']) {

        case '/?controller=Pages&action=home.php':
            $CURRENT_PAGE = 'home';
            $PAGE_TITLE = 'Home';
            break;
        case '/?controller=Post&action=readAll':
            $CURRENT_PAGE = 'readAll';
            $PAGE_TITLE = 'All Posts';
            break;
        case '/?controller=Post&action=create':
            $CURRENT_PAGE = 'create';
            $PAGE_TITLE = 'Create New Post';
            break;
        case '/?controller=User&action=logIn':
            $CURRENT_PAGE = 'logIn';
            $PAGE_TITLE = 'Login';
            break;
        case '/?controller=User&action=registerUser':
            $CURRENT_PAGE = 'registerUser';
            $PAGE_TITLE = 'Register';
            break;
        default:
            $CURRENT_PAGE = 'home';
            $PAGE_TITLE = 'Home';
    }

