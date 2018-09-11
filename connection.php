<?php
  class Db {

    protected static $dbHost = 'localhost';
    protected static $dbScheme = 'mvc';
    protected static $dbUser = 'rootuser';
    protected static $dbPass = 'p455w0rd';
    
    private static $instance = NULL;

    private function __construct() {
      $this->getEnv();
      $this->getInstance();
    }

    private function __clone() {}

    public static function getInstance() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        try { 
          self::$instance = new PDO('mysql:host='.self::$dbHost.';dbname='.self::$dbScheme,self::$dbUser,self::$dbPass, $pdo_options);
        } catch (Exception $e) {
          print "something went wrong\n<pre>";
          print_r($e) . '</pre>';
        }
      }

      return self::$instance;
    }
  }
?>