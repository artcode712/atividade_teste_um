<?php

include("../infra/db/connect.php");

// Verifica se o usuário está autenticado
if (!isset($_SESSION["usuario"])) {
    header("Location: ../index.php");
    exit();
}

// Obtém o ID do usuário que será excluído
$id = $_GET["id"];

// Comando SQL para remover o usuário
$sql = "DELETE FROM usuario WHERE id = $id ";

if ($conn->query($sql) === TRUE) {

    // Retorna para a página inicial caso dê certo
    header("Location: home.php");
    exit();
} else {
    echo "<script> alert('Deu errado!');</script>";
    header("Location: home.php");
    exit();
}