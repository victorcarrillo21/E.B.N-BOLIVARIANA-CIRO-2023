<?php


namespace Victor\Poo;

class db{
    private $dbhost = 'localhost'; 
    private $dbuser = 'root'; 
    private $dbpass = ''; 
    private $dbname = 'basedata';

  
        public function conexion() {
    $conn = 'mysql:host=' . $this->dbhost . ';dbname=' .  $this->dbname;
    $pdo = new PDO($conn, $this->dbuser, $this->dbpass);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->query("SET NAMES 'utf8'");
    return $pdo;
}
}   


$user = null ;
session_start();
if(isset($_SESSION['users_id'])){
  $records = $conn->prepare('SELECT * FROM users WHERE id =:id');
  $records->bindParam(':id',$_SESSION['users_id']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  if($results !== false) {
      $user = $results;
  }
}

