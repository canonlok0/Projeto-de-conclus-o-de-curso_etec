<?php 
    $servername = "localhost";
    $username = "root";
    $password = "ph";
    $dbname = "sistemafinanceiro";
    $conexao = new mysqli($servername, $username, $password, $dbname);
    if($conexao -> connect_error){
            die("Conection Failed: ".$conexao -> connect_error);
    }
?>