<?php
include_once 'includes/estrutura-top.php';
include_once __DIR__ . '/../config/querys.php';
?>

<form action="actions/livro.php" method="post">
    <label for="exemplo">Titulo: </label>
    <input type="text" name="titulo"/>
    <label for="exemplo">Descrição: </label>
    <input type="text" name="descricao"/>
    <label for="exemplo">Categoria </label>
    <input type="text" name="categoria"/>
    <label for="exemplo">Autor: </label>
    <select name="autor">
        <?php while ($autor = $consulta_autores->fetch(PDO::FETCH_ASSOC)): ?>
            <option value="<?php echo $autor['nome'] ?>"><?php echo $autor['nome'] ?></option>
        <?php endwhile; ?>
    </select>
    <label for="exemplo">Editora: </label>
    <select name="editora">
        <?php while ($editora = $consulta_editoras->fetch(PDO::FETCH_ASSOC)): ?>
            <option value="<?php echo $editora['nome'] ?>"><?php echo $editora['nome'] ?></option>
        <?php endwhile; ?>
    </select>
    <label for="exemplo">Data de Lançamento: </label>
    <input type="date" name="data_lancamento"/>
    <input type="submit" name="cad_livro" value="Cadastrar" />
</form>

<?php include_once 'includes/menu.php' ?>

<?php include_once 'includes/estrutura-bottom.php' ?>