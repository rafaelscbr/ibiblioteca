<?php include_once 'includes/estrutura-top.php' ?>

<form action="actions/autor.php" method="post">
    <label for="exemplo">Nome: </label>
    <input type="hidden" name="id" value="<?php echo $_GET['id']?>" />
    <input type="text" value="<?php echo $_GET['nome']?>" name="nome"/>
    <label for="exemplo">Sobre Nome: </label>
    <input type="text"value="<?php echo $_GET['sobrenome']?>"  name="sobrenome"/>
    <label for="exemplo">Data de Nascimento: </label>
    <input type="date" value="<?php echo $_GET['data_nascimento']?>" name="data_nascimento"/>
    <label for="exemplo">Data de Obito: </label>
    <input type="date" value="<?php echo $_GET['data_obito']?>"  name="data_obito"/>
    <input type="submit" name="edit_autor" value="Cadastrar" />
</form>

<?php include_once 'includes/menu.php' ?>
<br/>

<?php echo "<td><a href=actions/autor.php?id=" . $_GET['id'].">Excluir</a></td>" ?>

<?php include_once 'includes/estrutura-bottom.php' ?>

