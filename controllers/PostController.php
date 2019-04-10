<?php

    class PostController
    {
        public function readAll()
        {
            // Store all the posts in a variable
            $allPosts = Post::all();
            require_once 'views/posts/readAll.php';
        }

        public function read()
        {
            // we expect a url of form ?controller=posts&action=show&id=x
            // without an id we just redirect to the error page as we need the
            // post id to find it in the database
            if (isset($_GET['post_id'])) {
                try {
                    // we use the given id to get the correct post
                    $individualPost = Post::find($_GET['post_id']);
                    require_once 'views/posts/read.php';

                } catch (Exception $ex) {
                    call('Pages', 'error');
                }
            }

            call('Pages', 'error');

        }

        public function create()
        {
            // we expect a url of form ?controller=posts&action=create
            // if it's a GET request display a blank form for creating a new product
            // else it's a POST so add to the database and redirect to readAll action

            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                require_once 'views/posts/create.php';
            } else {
                Post::add();
                $allProducts = Post::all(); // $allProducts is used within the view
                require_once 'views/posts/readAll.php';
            }

        }
//
//        public function update()
//        {
//            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
//
//                // we use the given id to get the correct product
//                if (isset($_GET['id'])) {
//                    $individualProduct = Post::find($_GET['id']);
//                    require_once 'views/posts/update.php';
//                }
//                call('pages', 'error');
//
//            } else {
//                // create an id
//                $id = $_GET['id'];
//                Post::update($id);
//                $allProducts = Post::all();
//                require_once 'views/posts/readAll.php';
//            }
//
//        }
//
//        public function delete()
//        {
//            Post::remove($_GET['id']);
//            $allProducts = Post::all();
//            require_once 'views/posts/readAll.php';
//        }

    }
