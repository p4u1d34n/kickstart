<?php
  class PagesController {

    public function home() {
      $first_name = 'Sidney';
      $last_name  = 'Youngblood';
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
    
  }
?>