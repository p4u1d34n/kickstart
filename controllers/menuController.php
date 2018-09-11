<?php
  class MenuController {
  
    function __construct() {
      // we store all the posts in a variable
      require_once('models/Menu.php');
      $menu = Menu::all();
      require_once('views/menu/menu.php');
    }

    
  }
?>