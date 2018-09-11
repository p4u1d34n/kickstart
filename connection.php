<?php
  class Db {

    protected static $dbCredentials;
    private static $instance = NULL;

    private function __construct() {
      $this->getEnv();
      $this->getInstance();
    }

    private function __clone() {}

    private static function getEnv() {
      $env = fopen(".env");
      if($env) {
        while(($line=fgets($env)) !== false) {
          $credentials = explode(",",$line);
          print_r($credentials);
          self::$dbCredentials = $credentials; 
        }
      } else {
        die("create .env file");
      }
    }

    public static function getInstance() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        try { 
          self::$instance = new PDO('mysql:host='.self::$dbCredentials[0].';dbname='.self::$dbCredentials[1],self::$dbCredentials[2],self::$dbCredentials[3], $pdo_options);
        } catch (Exception $e) {
          
          print "something went wrong\n<pre>";
          print_r($e) . '</pre>';
        }
      }
        if (!self::$instance) {
          echo "DB NOT CONNECTED";
          
      }
      return self::$instance;
    }
  }
?>