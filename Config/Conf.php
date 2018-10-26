<?php
class Conf {
   
  static private $debug = True;

  static public function getDebug(){
    return self::$debug;
  }

  static private $databases = array(
    'hostname' => 'webinfo',
    'database' => 'valliere',
    'login' => 'valliere',
    'password' => '2510008026U'
  );
   
  static public function getLogin() {
    return self::$databases['login'];
  }

  static public function getHostname(){
    return self::$databases['hostname'];
  }

  static public function getDatabase(){
    return self::$databases['database'];
  }

  static public function getPassword(){
    return self::$databases['password'];
  }
   
}
?>

