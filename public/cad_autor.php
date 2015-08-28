<?php
include_once 'includes/estrutura-top.php';
include_once __DIR__ . '/../config/querys.php';
?>

<form action="/actions/autor.php" method="post">
    <label for="exemplo">Nome: </label>
    <input type="text" name="nome"/>
    <label for="exemplo">Sobre Nome: </label>
    <input type="text" name="sobrenome"/>
    <label for="exemplo">Data de Nascimento: </label>
    <input type="date" name="data_nascimento"/>
    <label for="exemplo">Data de Obito: </label>
    <input type="date" name="data_obito"/>
    <input type="submit" name="cad_autor" value="Cadastrar" />
</form>

<?php include_once 'includes/menu.php' ?>

<table border='1'>
    <tr>
        <td>nome</td>
        <td>sobrenome</td>
        <td>data_nascimento</td>
        <td>data_obito</td>
        <td>Opcoes</td>
    </tr>

    <?php while ($autor = $consulta_autores->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
            <td><?php echo $autor['nome'] ?></td>
            <td><?php echo $autor['sobrenome'] ?></td>
            <td><?php echo $autor['data_nascimento'] ?></td>
            <td><?php echo $autor['data_obito'] ?></td>
            <?php echo "<td><a href=edit_autor.php?id=" . $autor['id_autor'] . "&nome=" . $autor['nome'] . "&sobrenome=" . $autor['sobrenome'] . "&data_nascimento=" . $autor['data_nascimento'] . "&data_obito=" . $autor['data_obito'] . ">Opções</a></td>" ?>
        </tr>
    <?php endwhile ?>
</table>

<?php include_once 'includes/estrutura-bottom.php' ?>

