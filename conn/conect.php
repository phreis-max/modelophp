<?php
$host = "127.0.0.1";
$database = "tinsphpdb01";
$root = "root";
$pass = "";
$charset = "utf8";
$port = "3306";
 
try{
 //lembre dessa variável quando usar um comando SQL no PHP
 $conn = new mysqli($host,$root,$pass,$database,$port);
 mysqli_set_charset($conn,$charset);
}catch (Throwable $th){
    die("Atenção aconteceu um ERRO!".$th);
}
 
 
?>
