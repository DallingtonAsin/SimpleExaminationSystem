<?php
class Database{

  // specify your own database credentials
  public $host = "localhost";
  public $database = "cst_schools";
  public $user = "Dallington";
  public $pass_word = "3006005";
  public $conn;
  public $errors;

  // get the database connection
  public function doConnect(){

    $this->conn = null;
    try{
      $this->conn = new PDO("mysql:host=".$this->host.";dbname=" . $this->database, $this->user, 
        $this->pass_word);
       $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
      
    }catch(PDOException $i){
      echo "Connection error: " . $i->getMessage();
    }

    return $this->conn;
  }

}
?>
