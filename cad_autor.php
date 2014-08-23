<?php include_once 'includes/estrutura-top.php' ?>

    <form action="" method="post">
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

<?php include_once 'includes/estrutura-bottom.php'?>

