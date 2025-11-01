<?php

require_once "config.inc.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST["nome"];
    $estado = $_POST["estado"];
    $valor = $_POST["valor"];
    $id = $_POST["id"];

    $sql = "UPDATE produtos SET 
            nome = '$nome',
            estado = '$estado',
            valor = '$valor'
            WHERE id = '$id'";

    if(mysqli_query($conexao, $sql)){
        echo "<h3>Produto alterado com sucesso!</h3>";
        echo "<a href='?pg=prdutos-admin'>Voltar</a>";
    }else{
        echo "<h3>Erro ao alterar cadastro do produto!</h3>";
    }
}else{
    echo "<h2>Acesso negado!</h2>";
    echo "<a href='?pg=produtos-admin'>Voltar</a>";
}

mysqli_close($conexao);
