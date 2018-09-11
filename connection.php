<?php
  class Db {

    private static $instance = NULL;

    private function __construct() {
      $this->getInstance();
    }

    private function __clone() {}

    public static function getInstance() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$instance = new PDO('mysql:host=localhost;dbname=mvc', 'rootuser', 'p455w0rd', $pdo_options);
      }
        if (!$self::$instance) {
          echo "DB NOT CONNECTED";
          
      }
      return self::$instance;
    }
  }
?>