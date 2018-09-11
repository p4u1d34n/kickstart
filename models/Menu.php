<?php
  class Menu {
    
    public $id;
    public $link;
    public $title;

    /**
     * 
     * @param [int] $id      [description]
     * @param [string] $author  [description]
     * @param [string] $content [description]
     */
    public function __construct($id, $link, $title) {
      $this->id     = $id;
      $this->link   = $link;
      $this->title  = $title;
      $this->active = $active;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM menu');

      // Create Post objects from the DB Result
      
      foreach($req->fetchAll() as $post) {
        $active = false;
        if($_SERVER["REQUEST_URI"] === $post['link']) {
            $active = true;
        }
        $list[] = new Menu($post['id'], $post['link'], $post['title'], $active);
      }

      return $list;
    }


  }
?>