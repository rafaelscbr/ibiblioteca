<?php include_once 'includes/estrutura-top.php' ?>

<form action="/actions/autor.php" method="post">

    <div class="form-group row">
        <label for="Nome" class="col-sm-2 form-control-label">Nome: </label>
        <div class="col-sm-6">
            <input type="hidden" name="id" value="<?php echo $_GET['id']?>" />
            <input class="form-control" value="<?php echo $_GET['nome']?>"  type="text" name="nome"/>
        </div>
    </div>

    <div class="form-group row">
        <label for="Sobre nome" class="col-sm-2 form-control-label">Sobre Nome </label>
        <div class="col-sm-6">
            <input class="form-control" value="<?php echo $_GET['sobrenome']?>" type="text" name="sobrenome"/>
        </div>
    </div>

    <div class="form-group row">
        <label for="Nome" class="col-sm-2 form-control-label">Data Nascimento: </label>
        <div class="col-md-3">
            <input class="form-control" value="<?php echo $_GET['data_nascimento']?>" type="date" name="data_nascimento"/>
        </div>
    </div>

    <div class="form-group row">
        <label for="Nome" class="col-sm-2 form-control-label">Data Obito: </label>
        <div class="col-md-3">
            <input class="form-control" value="<?php echo $_GET['data_obito']?>" type="date" name="data_obito"/>
        </div>
    </div>

    <input class="btn btn-primary" type="submit" name="edit_autor" value="Editar" />

</form>

<?php echo "<td><a href=actions/autor.php?id=" . $_GET['id'].">Excluir</a></td>" ?>

<?php include_once 'includes/estrutura-bottom.php' ?>

