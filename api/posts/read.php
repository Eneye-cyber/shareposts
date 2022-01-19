<?php
  //Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  require_once '../../app/config/config.php';
  require_once '../../app/libraries/Database.php';
  require_once '../../app/models/Post.php';

  //Instantiate post com_get_active_object
  $post = new Post;

  if ($post) {
    // code...
    echo "string";
  }
  //Blog post query
  $result = $post->getPosts();
  $num = $result->rowCount();

  if ($num > 0) {
    // code...
    echo json_encode(
      array('message' => 'Progressing successfully')
    );

  } else {
    // code...
    echo json_encode(
      array('message' => 'no Post Found')
    );
  }

 ?>
