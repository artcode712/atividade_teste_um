<?php

include("../infra/db/connect.php");

if (!isset($_SESSION["usuario"])) {
    header("Location: ../index.php");
    exit();
}

$id = $_GET["id"];

?>

<html>
<head>
    <title>Confirmar Exclusão</title>
</head>
<body>

    <h2>Deseja realmente excluir este usuário?</h2>

    <a href="excluir.php?id=<?php echo $id; ?>">
        Sim, excluir
    </a>

    <br><br>

    <a href="home.php">
        Cancelar
    </a>

</body>
</html>