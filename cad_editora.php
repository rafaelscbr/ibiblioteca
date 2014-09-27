<?php include_once 'includes/estrutura-top.php' ?>
<?php include_once 'helpers/querys.php' ?>

<form action="functions/cad_editora.php" method="post">
    <label for="exemplo">Nome: </label>
    <input type="text" name="nome"/>
    <label for="exemplo">Data Fundação: </label>
    <input type="date" name="data_fundacao"/>
    <input type="submit" value="Cadastrar" />
</form>

<?php include_once 'includes/menu.php' ?>


<table border='1'>
    <tr>
        <td>NOME</td>
        <td>Data Fundacao</td>
        <td>Opcoes</td>
    </tr>
    <tr>
        <?php while ($editora = $consulta_editoras->fetch(PDO::FETCH_ASSOC)): ?>
            <td><?php echo $editora['nome'] ?></td>
            <td><?php echo $editora['data_fundacao'] ?></td>
            <?php echo "<td><a href=edit_editora.php?id=" . $editora['id_editora'] . "&nome=" . $editora['nome'] . "&data_fundacao=" . $editora['data_fundacao'] . ">Opções</a></td>" ?>
        <?php endwhile; ?>
    </tr>
</table>

<?php include_once 'includes/estrutura-bottom.php' ?>