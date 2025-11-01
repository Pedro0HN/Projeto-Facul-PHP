<?php

    require_once "config.inc.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $estado = $_POST["estado"];
        $valor = $_POST["valor"];

        $sql = "INSERT INTO produtos (nome, estado, valor)
                VALUES ('$nome', '$estado', '$valor')";
        if(mysqli_query($conexao, $sql)){
            echo "<h3>Produto cadastrado com sucesso!</h3>";
            echo "<a href='?pg=produtos-admin'>Voltar</a>";
        }else{
            echo "<h3>Erro ao cadastrar Produto!</h3>";
        }
    }else{
        echo "<h2>Acesso negado!</h2>";
        echo "<a href='?pg=produtos-admin'>Voltar</a>";
    }

    mysqli_close($conexao);