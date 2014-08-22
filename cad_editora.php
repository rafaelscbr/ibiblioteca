<?php include_once 'includes/estrutura-top.php' ?>
<?php include_once 'includes/menu.php' ?>
<?php include_once 'includes/estrutura-bottom.php'?>

<?=$header?>
    <form action="" method="post">
        <label for="exemplo">Nome: </label>
        <input type="text" name="nome"/>
        <label for="exemplo">Data Fundação: </label>
        <input type="date" name="data_fundacao"/>
        <input type="submit" value="Cadastrar" />
    </form>

    <?=$menu?>

 <?=$bottom?>