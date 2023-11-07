<?php

require_once("conexion.php");

function connection(){
    try{
        $c = new PDO("mysql:host=".Config::SERVER.";dbname=".Config::DBNAME, Config::USER, Config::PASS);
        $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $c->exec("use ".Config::DBNAME);
        return $c;

    }catch(PDOException $e){
        #die("Error: ".$e->getMessage());
        exit("Error: ".$e->getMessage());

    }
}

function insert($tbl_name,$db_values){
    $sql="INSERT INTO $tbl_name VALUES( $db_values);";
    echo $sql;
    return connection($sql);
 }