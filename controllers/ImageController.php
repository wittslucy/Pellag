<?php

   
    class ImageController {

        public function upload()
        {
            // we expect a url of form ?controller=User&action=register
            // if it's a GET request display a blank form for creating a new product
            // else it's a POST so add to the database and redirect to readAll action

            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                return render('views/posts/upload.php');
            }
            Image::upload();
            return render('views/posts/upload.php');
        }
   
           public function viewAll()
            {
            // Store all the posts in a variable
            $context['allImages'] = Image::viewAll();
            //$context['allCommentsCounts'] = Comment::allCommentsCounts();
            return render('views/user/gallery.php', $context);
        }
              
    }

