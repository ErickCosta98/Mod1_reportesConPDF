<?php
//1.-Definis parametros de conexion con la bd
$mysqli = new mysqli('localhost','root','','mexico');

if(mysqli_connect_errno()){
    echo 'conexion fallida', mysqli_connect_error();
    exit();
}

//printf("informasion del server: %s\n",$mysqli->server_info)


?>