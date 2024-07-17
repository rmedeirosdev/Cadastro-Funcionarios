<?php
    /* Este script conecta um banco de dados MySQL conforme parâmetros enviados
    */
    $nomeServidor = "localhost";
    $dbName = "provaA1";
    $usuario = "root";
    $senha = "";
    try
    {
        $conexao = new PDO("mysql:host=$nomeServidor;dbname=$dbName", $usuario, $senha);
        die ("<pre>"."Conexão com a Base de Dados do MySQL $dbName estabelecida com sucesso !!!!.");
    }
    catch (PDOException $pe)
    {
        die("<pre>"."Não foi possível se conectar ao banco de dados $dbName :" . $pe->getMessage());
    } 
?>
