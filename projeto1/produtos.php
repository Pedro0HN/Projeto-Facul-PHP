<?php
require_once "admin/config.inc.php";
$sql = "SELECT * FROM produtos";
$resultado = mysqli_query($conexao, $sql);
if (mysqli_num_rows($resultado) > 0) {

    echo "<h2>Nossos Produtos</h2>";
?>
<div>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>estado</th>
                <th>valor</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while($dados = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
            <td><?=$dados['nome']?></td>
            <td><?=$dados['estado']?></td>
            <td><?=$dados['valor']?></td>
        </tr>
        <?php
            }
        ?>

        </tbody>
    </table>
</div>
<?php
    }else{
        echo "<h2>Nenhum Produto cadastrado</h2>";
    }
?>






