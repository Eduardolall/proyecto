<?php
require_once("connection.php");
require_once("jwt.php");

$email = $_POST['txt_Mail'];   
$password = $_POST['passw'];


if($_SERVER['REQUEST_METHOD']){
    if( isset($email) && isset($password)){
        $con = connection();
        $sql = $con->prepare("SELECT email FROM users WHERE email=:e AND password=:p");
        $sql->bindValue(":e", $email);
        $sql->bindValue(":p", $password);
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        $user = $sql->fetch();
        if($user){
            $jwt = JWT::create($user, Config::SECRET, 60*60*24*30);
        //echo json_encode(["user"=>$user, "jwt"=>$jwt]);
            ?> <meta http-equiv="refresh" content="0;URL=index1.php" > <?php 
        }else{
        
            header("HTTP/1.1 401 Unauthorized");
        echo json_encode(["error" => "Correo o contrasena incorrecta"], JSON_UNESCAPED_SLASHES);
        }
    }else{
        header("HTTP/1.1 400 Method Bad Request");
    }
}else{
    header("HTTP/1.1 405 Method Not Allowed");
    
}