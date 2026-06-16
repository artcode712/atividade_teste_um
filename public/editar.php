<?php
// Conecta ao banco de dados
  include("../infra/db/connect.php");
  // Verifica se o usuário está logado
  if (!issets($_SESSION["usuario"])){
    header("Location: ../index.php");
    exit();
  }

// Obtém o ID enviado pela URL
    $id = $_GET["id"];
    echo $id;

    // Busca os dados do usuário no banco
    $sql = "SELECT * FROM usuario WHERE id = $id";

    // Executa a consulta
    resultado = $conn -> query($sql);

    // Armazena os dados do usuário em um array
    $usuario = $resultado -> fetch_assoc();

  
   ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
  
    <h2>Editar usuário</h2>
    <form method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario">
        <br>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br>
        <br>
        <?php

            if(isset($erro)){
                echo $erro;
            }
        ?>
        <button type="submit">Salvar</button>
    </form>
    


    
</body>
</html>