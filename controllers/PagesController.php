<?php

    require_once 'models/Post.php';
    require_once 'models/Comment.php';

    class PagesController
    {
        public function home()
        {
            // Initialized in index.php using PHP Sessions.
            global $user;

            // Example data to use in the home page.
            $context['user'] = $user;
            $context['allPosts'] = Post::tenMostRecent();
            $context['allComments'] = Comment::tenMostRecent();
            return render('views/pages/home.php', $context);
        }

        public function error(Exception $ex)
        {
            $context['exception'] = $ex;
            return render('views/pages/error.php', $context);
        }
    }
