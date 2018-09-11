<?php
  class Db {

    protected static $dbHost = 'localhost';
    protected static $dbScheme = 'mvc';
    protected static $dbUser = NULL;
    protected static $dbPass = NULL;
    
    private static $instance = NULL;

    private function __construct() {
      $this->getEnv();
      $this->getInstance();
    }

    private function __clone() {}

    private static function getEnv() {
      
      try {
        $env = fopen(".db");
        if($env) {
          $credentials = array();
          while(($line=fgets($env)) !== false) {
            $credentials[] = $line;
          }
          if( count($credentials) == 0 ) {
            throw new Exception('Nothing in credentials');
          } else {
            self::$dbUser = $credentials[0];
            self::$dbPass = $credentials[1];
          }

        } else {
          throw new Exception('Did not open env.ini');
        }
      } catch(Exception $e) {
        print "didnt load env.ini\n<pre>";
        print_r($e) . '</pre>';
      }
      
    }

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