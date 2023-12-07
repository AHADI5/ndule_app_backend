<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require('../models/Etudiant.php');
require('../config/Database.php');

header("Access-Control-Allow-Origin: *");
header("Content-type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods");

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    $db = new Database() ;
    $connection = $db -> getConnection() ;
    $etudiant = new Etudiant($connection) ;
    $statement = $etudiant -> readAll() ;
    
    if (count($statement) > 0 ) {
       echo json_encode($statement) ;
    } else {
        echo json_encode( ["error"=> "No data"] ) ;
    }
} else {
    echo json_encode( ["error"=> "This message is not Accessible through another Method"] ) ;
}