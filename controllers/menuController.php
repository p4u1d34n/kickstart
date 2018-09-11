<?php
  class MenuController {
  
    function __construct() {
      // we store all the posts in a variable
      $menu = Menu::all();
      require_once('views/menu/menu.php');
    }

    
  }
?>