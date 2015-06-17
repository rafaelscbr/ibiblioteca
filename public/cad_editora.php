<?php
include_once 'includes/estrutura-top.php';
include_once __DIR__ . '/../config/querys.php';
?>

<form action="actions/editora.php" method="post">
    <label for="exemplo">Nome: </label>
    <input type="text" name="nome"/>
    <label for="exemplo">Data Fundação: </label>
    <input type="date" name="data_fundacao"/>
    <input type="submit" name="cad_editora" value="Cadastrar" />
</form>

<?php include_once 'includes/menu.php' ?>

<table border='1'>
    <tr>
        <td>NOME</td>
        <td>Data Fundacao</td>
        <td>Opcoes</td>
    </tr>
    <?php while ($editora = $consulta_editoras->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
            <td><?php echo $editora['nome'] ?></td>
            <td><?php echo $editora['data_fundacao'] ?></td>
            <?php echo "<td><a href=edit_editora.php?id=" . $editora['id_editora'] . "&nome=" . $editora['nome'] . "&data_fundacao=" . $editora['data_fundacao'] . ">Opções</a></td>" ?>
        </tr>
    <?php endwhile; ?>
</table>

<?php include_once 'includes/estrutura-bottom.php' ?>