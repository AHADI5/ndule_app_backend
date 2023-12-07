<?php 

class Database{
    private $serverName = 'localhost';
    private $userName = 'root';
    private $passWord = 'root';
    private $databaseName = 'students';
  
    public function getConnection () {
        try {
            $connection = new PDO("mysql:host={$this -> serverName};
            dbname={$this -> databaseName}",$this -> userName,$this -> passWord);
            //set the PDO error mode to exception 
            $connection -> setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
            echo "Connected Successfully";
          } catch (PDOException $e) {
            echo "Connection failed : " . $e -> getMessage(); 
          }
        return $connection;
    }
  
}

// $database =  new Database();
// $n = $database -> getConnection(); 
// echo "hello";
// $etudiant = new Etudiant($n);
// echo json_encode($etudiant -> readAll());