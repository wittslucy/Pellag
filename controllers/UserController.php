<?php

    class UserController
    {
        public function registerUser()
        {
            // we expect a url of form ?controller=User&action=register
            // if it's a GET request display a blank form for creating a new product
            // else it's a POST so add to the database and redirect to readAll action

            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                require_once 'views/user/registerUser.php';
            } else {
                User::create();
            }
            require_once 'views/user/registerUser.php';
        }

        public function logIn()
        {
            // we expect a url of form ?controller=User&action=register
            // if it's a GET request display a blank form for creating a new product
            // else it's a POST so add to the database and redirect to readAll action

            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                require_once 'views/user/logIn.php';
            } else {
                User::login();
            }
            require_once 'views/user/logIn.php';
        }

        public function logOut()
        {
            // we expect a url of form ?controller=User&action=register
            // if it's a GET request display a blank form for creating a new product
            // else it's a POST so add to the database and redirect to readAll action

            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                require_once 'views/user/logOut.php';
            } else {
                User::logout();
            }
            require_once 'views/user/logOut.php';
        }

    }