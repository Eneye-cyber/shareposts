<?php
    /**
     *
     */
     //Headers
     header('Access-Control-Allow-Origin: *');
     header('Content-Type: application/json');

    class Posts extends Controller{

     public function __construct(){
       if (!isLoggedIn()) {
         redirect('users/login');
       }

      $this->postModel = $this->model('Post');

     }
        public function index(){
          // Get Posts
          $posts = $this->postModel->getPosts();
          $data = [
            'posts' => $posts
          ];

          $this->view('posts/index', $data);
        }
        public function api(){
          // Get Posts
          $posts = $this->postModel->getPosts();

          if ($posts) {
            // code...
            echo json_encode($posts);

          } else {
            // code...
            echo json_encode(
              array('message' => 'no Post Found')
            );
          }
        }


    }

 ?>
