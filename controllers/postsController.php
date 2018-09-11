<?php
  class PostsController {
  
    public function index() {
      // we store all the posts in a variable
      $posts = Post::all();
      require_once('views/posts/index.php');
      
      print_r($_SERVER);
    }

    public function show() {
      // URL Format: ?controller=posts&action=show&id=x
      if (!isset($_GET['id']))
        return call('pages', 'error');

      $post = Post::find($_GET['id']);
      require_once('views/posts/show.php');
    }
    
  }
?>