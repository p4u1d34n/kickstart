<?php

  /**
   * Show; get the menu controller
   */
  function show() {
    require_once('controllers/menuController.php');
    $controller = new MenuController();
    $controller->show();
  }
?>