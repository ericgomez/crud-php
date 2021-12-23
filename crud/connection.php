<?php 

class DB {
  private static $instance = NULL;
  
  public function createInstance() {

    // validate if the instance not exists
    if (!isset(self::$instance)) {
      // notification error
      $optionsPDO['PDO::ATTR_ERRMODE'] = PDO::ERRMODE_EXCEPTION;

      // In the Docker container, the hostname is the name of the container, in this case it is "db"
      self::$instance = new PDO('mysql:host=db;dbname=app_db', 'root', 'root', $optionsPDO);
      echo "Connected to database";
    }
    
    return self::$instance;
  }
}


?>