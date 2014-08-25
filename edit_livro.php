<?php include_once 'includes/estrutura-top.php' ?>
<?php include_once 'helpers/querys.php' ?>

<form action="functions/edit_livro.php" method="post">
    <label for="exemplo">Titulo: </label>
    <input type="text" value='<?php echo $_GET['titulo']?>' name="titulo"/>
    <input type="hidden" value='<?php echo $_GET['id']?>' name="id"/>
    <label for="exemplo">Descrição: </label>
    <input type="text" value='<?php echo $_GET['descricao']?>'name="descricao"/>
    <label for="exemplo">Categoria </label>
    <input type="text" value='<?php echo $_GET['categoria']?>' name="categoria"/>
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
    <input type="date" value='<?php echo $_GET['data_lancamento']?>' name="data_lancamento"/>
    <input type="submit" value="Cadastrar" />
</form>

<?php include_once 'includes/menu.php' ?>
<br/>
<?php echo "<td><a href=functions/ex_livro.php?id=" . $_GET['id'].">Excluir</a></td>" ?>

<?php include_once 'includes/estrutura-bottom.php' ?>