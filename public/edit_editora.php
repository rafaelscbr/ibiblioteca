<?php include_once 'includes/estrutura-top.php' ?>

<form action="actions/editora.php" method="post">
    <div class="form-group row">
        <label for="Nome" class="col-sm-2 form-control-label">Nome: </label>
        <div class="col-sm-6">
            <input type="hidden" value='<?php echo $_GET['id'] ?>' name="id"/>
            <input type="text" value='<?php echo $_GET['nome'] ?>' class="form-control" name="nome"/>
        </div>
    </div>

    <div class="form-group row">
        <label for="Data Fundação" class="col-sm-2 form-control-label">Data Fundação: </label>
        <div class="col-sm-3">
            <input type="date" class="form-control" value='<?php echo $_GET['data_fundacao'] ?>' name="data_fundacao"/>
        </div>
    </div>
    <input type="submit" class="btn btn-primary" name="edit_editora" value="Cadastrar" />
</form>

<?php include_once 'includes/menu.php' ?>

<br/>

<?php echo "<td><a href=actions/editora.php?id=" . $_GET['id'].">Excluir</a></td>" ?>


