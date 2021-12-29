<?php

class DB {

    // variable for saving the connection
    private static $instance = null;

    public static function createInstance() {
      if (!isset(self::$instance)) {
        self::$instance = new PDO('mysql:host=db;dbname=crudpoo', 'root', 'root');
        self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
      }

      return self::$instance;
    }
}

?>