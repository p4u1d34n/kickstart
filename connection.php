<?php
  class Db {

    protected static $dbHost = '';
    protected static $dbScheme = '';
    protected static $dbUser = '';
    protected static $dbPass = '';
    
    private static $instance = NULL;

    private function __construct() {

      $this->getInstance();
    }

    private function getCredentials() {
      $config = json_decode(json_encode(parse_ini_file("config.ini",true)));
      self::$dbHost = $config->database->host;
      self::$dbScheme = $config->database->schema;
      self::$dbUser = $config->database->user;
      self::$dbPass = $config->database->password;
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