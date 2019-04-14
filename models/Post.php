<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    class Post
    {
        // we define 3 attributes
        public $post_id;
        public $user_id;
        public $post_content;
        public $post_title;
        public $date_created;

        /** @var MY_PDO $pdo */
        public $pdo;

        public function __construct($post_id, $user_id, $post_title, $post_content, $date_created)
        {
            /** @var MY_PDO $pdo */
            $this->pdo = MY_PDO::getInstance();

            $this->post_id = $post_id;
            $this->user_id = $user_id;
            $this->post_title = $post_title;
            $this->post_content = $post_content;
            $this->date_created = $date_created;
        }

        /**
         * @return array
         */
        public static function all()
        {
            $pdo = MY_PDO::getInstance();

            $sqlQuery = 'SELECT * FROM blogSite.blog_post LEFT JOIN blogSite.blog_user bu on blog_post.user_id = bu.user_id';

            /** @var MY_PDO $pdo */
            $result = $pdo->run($sqlQuery);

            if ($result)
            {
                $allPosts = $result->fetchAll(PDO::FETCH_ASSOC);
            }

            return $allPosts;

        }

        /**
         * @param $post_id
         * @return mixed
         */
        public static function find($post_id)
        {
            $pdo = MY_PDO::getInstance();
            //use intval to make sure $id is an integer
            $post_id = intval($post_id);

            $sqlQuery = 'SELECT * FROM blogSite.blog_post WHERE post_id = :post_id';
            $result = $pdo->run($sqlQuery, array('post_id' => $post_id));

            $post = $result->fetch(PDO::FETCH_ASSOC);

            if ($post) {
                return $post;
            }
            //replace with a more meaningful exception
            throw Exception('A real exception should go here');

        }

        public static function update($post_id)
        {
            $pdo = MY_PDO::getInstance();
            
            $sqlQuery = 'Update blog_post set post_title=:post_title, date_created=:date_created, post_author=:post_author, post_content=:post_content where post_id=:post_id';
            $req = $pdo->run($sqlQuery);

            // set name and price parameters and execute
            if (isset($_POST['post_title']) && $_POST['post_title'] !== '') {
                $filteredPostTitle = filter_input(INPUT_POST, 'post_title', FILTER_SANITIZE_SPECIAL_CHARS);
            }
            if (isset($_POST['post_content']) && $_POST['post_content'] !== '') {
                $filteredPostContent = filter_input(INPUT_POST, 'post_content', FILTER_SANITIZE_SPECIAL_CHARS);
            }
            if (isset($_POST['post_author']) && $_POST['post_author'] !== '') {
                $filteredPostAuthor = filter_input(INPUT_POST, 'post_author', FILTER_SANITIZE_SPECIAL_CHARS);
            }
            if (isset($_POST['date_created']) && $_POST['date_created'] !== '') {
                $date_created = $_POST['date_created'];
            }

            $post_title = $filteredPostTitle;
            $post_content = $filteredPostContent;
            $post_author = $filteredPostAuthor;


            $req->bindParam(':post_id', $post_id);
            $req->bindParam(':post_author', $post_author);
            $req->bindParam(':post_title', $post_title);
            $req->bindParam(':post_content', $post_content);
            $req->bindParam(':date_created', $date_created);

            $req->execute();

            //upload product image if it exists
//            if (!empty($_FILES[self::InputKey]['name'])) {
//                self::uploadFile($post_title);
//            }

        }

        public static function add()
        {
            $pdo = MY_PDO::getInstance();
            $sqlQuery = 'Insert into blog_post(user_id, post_title, post_content, date_created) values (:user_id, :post_title, :post_content, :date_created)';

            $req = $pdo->run($sqlQuery);

            // set name and price parameters and execute
            if (isset($_POST['post_title']) && $_POST['post_title'] !== '') {
                $filteredPostTitle = filter_input(INPUT_POST, 'post_title', FILTER_SANITIZE_SPECIAL_CHARS);
            }
            if (isset($_POST['post_content']) && $_POST['post_content'] !== '') {
                $filteredPostContent = filter_input(INPUT_POST, 'post_content', FILTER_SANITIZE_SPECIAL_CHARS);
            }
            if (isset($_POST['post_author']) && $_POST['post_author'] !== '') {
                $filteredPostAuthor = filter_input(INPUT_POST, 'post_author', FILTER_SANITIZE_SPECIAL_CHARS);
            }
            if (isset($_POST['date_created']) && $_POST['date_created'] !== '') {
                $date_created = $_POST['date_created'];
            }

            $post_title = $filteredPostTitle;
            $post_content = $filteredPostContent;
            $post_author = $filteredPostAuthor;

            $req->bindParam(':post_author', $post_author);
            $req->bindParam(':post_title', $post_title);
            $req->bindParam(':post_content', $post_content);
            $req->bindParam(':date_created', $date_created);

            $req->execute();

            //upload product image
//            self::uploadFile($post_title);
        }

        const AllowedTypes = ['image/jpeg', 'image/jpg'];
        const InputKey = 'myUploader';

        //die() function calls replaced with trigger_error() calls
        //replace with structured exception handling
//        public static function uploadFile($name)
//        {
//            if (empty($_FILES[self::InputKey])) {
//                //die("File Missing!");
//                trigger_error('File Missing!');
//            }
//
//            if ($_FILES[self::InputKey]['error'] > 0) {
//                trigger_error('Handle the error! ' . $_FILES[self::InputKey]['error']);
//            }
//
//            if (!in_array($_FILES[self::InputKey]['type'], self::AllowedTypes, true)) {
//                trigger_error('Handle File Type Not Allowed: ' . $_FILES[self::InputKey]['type']);
//            }
//
//            $tempFile = $_FILES[self::InputKey]['tmp_name'];
//            $path = '/Users/Art3mis/Projects/SkyGetIntoTech/Projects/Blog-Pellag/src/views/images';
//            $destinationFile = $path . $name . '.jpeg';
//
//            if (!move_uploaded_file($tempFile, $destinationFile)) {
//                trigger_error('Handle Error');
//            }
//
//            //Clean up the temp file
//            if (file_exists($tempFile)) {
//                unlink($tempFile);
//            }
//        }

        public static function remove($post_id)
        {
            //make sure $id is an integer
            $post_id = intval($post_id);
            $pdo = MY_PDO::getInstance();
            $sqlQuery = 'delete FROM blogSite.blog_post WHERE post_id = :post_id';
            $pdo->run($sqlQuery, array('post_id' => $post_id));
        }

    }
