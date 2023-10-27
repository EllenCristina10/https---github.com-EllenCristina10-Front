<?php
    $dbHost = "localhost";
    $dbUsername = "root"; // Nome de usuário do banco de dados
    $dbPassword = ""; // Senha do banco de dados
    $dbName = "laravel";

    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // Verificar a conexão
    if ($conn->connect_error) {
        echo "Falha na conexão: " . $conn->connect_error;
    } else {
        echo "Conexão bem-sucedida! ";
    }
?>
