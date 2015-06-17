<?php include_once 'includes/estrutura-top.php' ?>

<form action="actions/editora.php" method="post">
    <label for="exemplo">Nome: </label>
    <input type="hidden" value='<?php echo $_GET['id'] ?>' name="id"/>
    <input type="text" value='<?php echo $_GET['nome'] ?>' name="nome"/>
    <label for="exemplo">Data Fundação: </label>
    <input type="date" value='<?php echo $_GET['data_fundacao'] ?>' name="data_fundacao"/>
    <input type="submit" name="edit_editora" value="Cadastrar" />
</form>

<?php include_once 'includes/menu.php' ?>

<br/>

<?php echo "<td><a href=actions/editora.php?id=" . $_GET['id'].">Excluir</a></td>" ?>


                                  