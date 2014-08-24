<?php include_once 'includes/estrutura-top.php' ?>
<?php include_once 'helpers/querys.php' ?>

<form action="functions/cad_autor.php" method="post">
    <label for="exemplo">Nome: </label>
    <input type="text" name="nome"/>
    <label for="exemplo">Sobre Nome: </label>
    <input type="text" name="sobrenome"/>
    <label for="exemplo">Data de Nascimento: </label>
    <input type="date" name="data_nascimento"/>
    <label for="exemplo">Data de Obito: </label>
    <input type="date" name="data_obito"/>
    <input type="submit" value="Cadastrar" />
</form>

<?php include_once 'includes/menu.php' ?>

<table border='1'>
    <tr>
        <td>nome</td>
        <td>sobrenome</td>
        <td>data_nascimento</td>
        <td>data_obito</td>
    </tr>
    <tr>
        <?php while ($autor = $consulta_autores->fetch(PDO::FETCH_ASSOC)): ?>
            <td><?php echo $autor['nome'] ?></td>
            <td><?php echo $autor['sobrenome'] ?></td>
            <td><?php echo $autor['data_nascimento'] ?></td>
            <td><?php echo $autor['data_obito'] ?></td>
        <?php endwhile; ?>
    </tr>
</table>

<?php include_once 'includes/estrutura-bottom.php' ?>

