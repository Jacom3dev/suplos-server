<?php 
require_once "db/Database.php";

class Currency {

    /* traigo toda la data de la tabla currency */
    static public function get(){
        $sql = "SELECT * FROM currency";
        $statement = Database::connect()->prepare($sql);
        $statement->execute();
        return  $statement->fetchAll(PDO::FETCH_ASSOC);
    }  
}