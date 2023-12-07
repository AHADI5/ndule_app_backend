<?php 

class Etudiant {
    private $table = "informations";
    private $connection = null;

    public $db;
    public $nom;
    public $prenom ;

    public function __construct($db) {
        //Gestion de la dependance 

        if($this -> connection == null) {
            $this -> connection =$db;
        }
    }

    public function readAll() {

        $requette = 'SELECT * FROM informations';
        $statement = ($this -> connection ) -> prepare($requette) ;
        $execution = $statement -> execute();
        $student = [];
        if ($execution) {
            while ($data = $statement -> fetch()) {
                array_push( $student, $data );
            }
            return $student;
        }

    }
}

echo "Hello world";
