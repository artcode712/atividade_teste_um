<?php
// Importa a conexão com o banco
include("infra/db/connect.php");

// Verifica se o formulário foi enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){

// Captura os dados digitados
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

        // Consulta para validar login
    $sql = "SELECT * FROM usuario 
    WHERE usuario = '$usuario' 
    AND senha = '$senha'";

 // Verifica se encontrou usuário
    $resultado = $conn -> query($sql);

    if($resultado -> num_rows > 0){
         // Armazena usuário na sessão
        $_SESSION["usuario"] = $usuario;
        // Redireciona para home
        header("Location: public/home.php");
        exit();
    }else{
        $erro = "Usuário ou senha inválidos.";
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com PHP</title>
</head>
<body>
     <?php
    include("public/component/navbar.php");
    ?>
    <h2>Login com PHP</h2><form method="POST">
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
        <button type="submit">Entrar</button>
    </form>
    


    
</body>
</html>