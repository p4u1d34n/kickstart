<?php
  class MenuController {
  
    public function show() {
      // we store all the posts in a variable
      $menu = Menu::getMenu();
      require_once('views/menu/menu.php');
    }

    private function getMenu() {
        /*
        TODO: Build menu system
        */
        return true;
    }
    
  }
?>