<?php
  class Post {
    
    public $id;
    public $author;
    public $content;

    /**
     * 
     * @param [int] $id      [description]
     * @param [string] $author  [description]
     * @param [string] $content [description]
     */
    public function __construct($id, $author, $content) {
      $this->id      = $id;
      $this->author  = $author;
      $this->content = $content;
    }


    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM posts');

      // Create Post objects from the DB Result
      foreach($req->fetchAll() as $post) {
        $list[] = new Post($post['id'], $post['author'], $post['content']);
      }

      return $list;
    }

    /**
     * [find description]
     * @param  [int] $id [post ID]
     * @return [object]  [the post object is returned]
     */
    public static function find($id) {
      $db = Db::getInstance();
      // $id is an integer right?
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM posts WHERE id = :id');
      // query prepared, replace :id with our $id
      $req->execute(array('id' => $id));
      $post = $req->fetch();

      return new Post($post['id'], $post['author'], $post['content']);
    }
  }
?>