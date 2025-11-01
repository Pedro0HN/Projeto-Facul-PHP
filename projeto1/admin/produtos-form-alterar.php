<?php

    require_once 'config.inc.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM produtos WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            $nome = $dados['nome'];
            $estado = $dados['estado'];
            $valor = $dados['valor'];
            $id = $dados['id'];

        }
?>

<h2>Cadastro de Produto</h2>
<form action="?pg=produtos-alterar" method="post">
    <input type="hidden" name="id" value="<?=$id?>">

    <label>Nome:</label>
    <input type="text" name="nome" value="<?=$nome?>"><br>
    <label>Estado:</label>
    <input type="text" name="estado" value="<?=$estado?>"><br>
    <label>Valor:</label>
    <input type="number" name="valor" value="<?=$valor?>"><br>
    <input type="submit" value="Cadastrar Produto">

</form>

<?php
    }else{
        echo "<h2>Nenhum Produto encontrado!</h2>";
    }
?>
