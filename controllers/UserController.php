<?php

    class UserController
    {
        public function registerUser()
        {
            // we expect a url of form ?controller=User&action=register
            // if it's a GET request display a blank form for creating a new product
            // else it's a POST so add to the database and redirect to readAll action

            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                return render('views/user/registerUser.php');
            }
            User::create();
            return render('views/user/registerUser.php');
        }

        public function logIn()
        {
            // we expect a url of form ?controller=User&action=register
            // if it's a GET request display a blank form for creating a new product
            // else it's a POST so add to the database and redirect to readAll action

            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                return render('views/user/logIn.php');
            }
            User::login();
            return render('views/user/logIn.php');
        }

        public function logOut()
        {
            // we expect a url of form ?controller=User&action=register
            // if it's a GET request display a blank form for creating a new product
            // else it's a POST so add to the database and redirect to readAll action

            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                return render('views/user/logOut.php');
            }
            User::logout();
            return render('views/user/logOut.php');
        }

    }