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
      try {
        $env = fopen("env.ini");
        if($env) {
          while(($line=fgets($env)) !== false) {
            $credentials = explode(",",$line);
            print_r($credentials);
            self::$dbCredentials = $credentials; 
          }
        }
      } catch(Exception $e) {
        print "didnt load env.ini\n<pre>";
        print_r($e) . '</pre>';

        print_r(json_encode(self::$dbCredentials));
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

          print_r(json_encode(self::$dbCredentials));
        }
      }

      return self::$instance;
    }
  }
?>