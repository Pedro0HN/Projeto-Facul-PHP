<?php

    require_once "config.inc.php";

    $sql = "SELECT * FROM produtos";

    $resultado = mysqli_query($conexao, $sql);

    echo "<a href='?pg=produtos-form'>Cadastrar Produtos</a>";

    echo "<h2>Lista de Produtos</h2><hr>";

    if (mysqli_num_rows($resultado) > 0) {
        while($dados = mysqli_fetch_array($resultado)) {
            echo "ID: " . $dados['id'] . "<br>";
            echo "Nome: " . $dados['nome'] . "<br>";
            echo "Estado: " . $dados['estado'] . "<br>";
            echo "Valor: " . $dados['valor'] . "<br>";
            echo "<a href='?pg=produtos-form-alterar&id=$dados[id]'>Editar</a>";
            echo " | <a href='?pg=produtos-excluir&id=$dados[id]'>Excluir</a>";
            echo "<hr>";
        }
    }else{
        echo "Nenhum produto  cadastrado!";
    }
