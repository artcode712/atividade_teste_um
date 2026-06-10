<?php
//inicia a sessão
    session_start();

    // Dados de conexão com o banco
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "sistema_simples";
    
    // Cria a conexão com o MySQL
    $conn = new mysqli($host,$user,$pass,$db);

    // if($conn->connect_error){
    //     die("Erro na conexão");
    // }else{
    //     echo ("<p> BD: ok </p>");
    // }
?>