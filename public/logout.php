<?php
    session_start();
    // Remove todos os dados da sessão
    session_destroy();
    // Retorna para tela de login
    header("Location: ../index.php");
    exit();
?>