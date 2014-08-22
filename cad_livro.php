<?php include_once 'includes/estrutura-top.php' ?>
<?php include_once 'includes/menu.php' ?>
<?php include_once 'includes/estrutura-bottom.php'?>

<?=$header?>
    <form action="" method="post">
        <label for="exemplo">Titulo: </label>
        <input type="text" name="titulo"/>
        <label for="exemplo">Descrição: </label>
        <input type="text" name="descricao"/>
        <label for="exemplo">Categoria </label>
        <input type="text" name="categoria"/>
        <label for="exemplo">Autor: </label>
        <input type="text" name="autor"/>
        <label for="exemplo">Editora: </label>
        <input type="text" name="editora"/><br/>
        <label for="exemplo">Data de Lançamento: </label>
        <input type="date" name="data_lacamento"/>
        <input type="submit" value="Cadastrar" />
    </form>
        
    <?=$menu?>

 <?=$bottom?>