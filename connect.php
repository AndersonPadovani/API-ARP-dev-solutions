<?php
class DB{
    public function __construct(){
        try{
            $varConfig = require_once "./config.php";

            $dsn = sprintf("mysql:host=%s;dbname=%s", $varConfig["HOST_NAME"], $varConfig["DB_NAME"]);

            $con = new PDO($dsn, $varConfig["DB_USER"], $varConfig["DB_PASS"]);
            echo "conectado com sucesso";
            return $con;
        }catch(PDOException $error){
            echo("Falha ao tentar conectar com o banco de dados!\n" . $error);
        }     
    }
}
?>