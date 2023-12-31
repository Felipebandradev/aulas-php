<?php
$arquivo = basename($_SERVER['PHP_SELF']) ;

$titulo = match ($arquivo) {
    "index.php" => "Página Inicial",
    "cursos.php" => "Cursos",
    "duvidas.php" => "Dúvidas",
    "contato.php" => "Contato",
    default => "Nova Página"
};
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titulo?> | Site PHP</title>

    <link rel="stylesheet" href="css/estilos.css">
    
</head>
<body>
    <header>
        <h1>Site PHP</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="cursos.php">Cursos</a>
            <a href="duvidas.php">Dúvidas</a>
            <a href="contato.php">Contato</a>
        </nav>
    </header>
    <main>  