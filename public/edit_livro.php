<?php
include_once 'includes/estrutura-top.php';
include_once __DIR__ . '/../config/querys.php';
?>

<form action="actions/livro.php" method="post">

    <div class="form-group row">
        <label for="Titulo" class="col-sm-2 form-control-label">Titulo: </label>
        <div class="col-sm-6">
            <input class="form-control" value='<?php echo $_GET['titulo']?>' type="text" name="titulo"/>
            <input type="hidden" value='<?php echo $_GET['id']?>' name="id" required/>
        </div>
    </div>

    <div class="form-group row">
        <label for="Descrição" class="col-sm-2 form-control-label">Descrição: </label>
        <div class="col-sm-6">
            <input class="form-control" value='<?php echo $_GET['descricao']?>' type="text" name="descricao" required/>
        </div>
    </div>

    <div class="form-group row">
        <label for="Categoria" class="col-sm-2 form-control-label">Categoria: </label>
        <div class="col-sm-6">
            <input type="text" value='<?php echo $_GET['categoria']?>' class="form-control" name="categoria" required/>
        </div>
    </div>

    <div class="form-group row">
        <label for="Autor" class="col-sm-2 form-control-label">Autor: </label>
        <div class="col-sm-4">
            <select class="form-control" name="autor" required>
                <?php while ($autor = $consulta_autores->fetch(PDO::FETCH_ASSOC)): ?>
                    <option value="<?php echo $autor['nome'] ?>"><?php echo $autor['nome'] ?></option>
                <?php endwhile; ?>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="Editora" class="col-sm-2 form-control-label">Editora: </label>
        <div class="col-sm-4">
            <select class="form-control" name="editora" required>
                <?php while ($editora = $consulta_editoras->fetch(PDO::FETCH_ASSOC)): ?>
                    <option value="<?php echo $editora['nome'] ?>"><?php echo $editora['nome'] ?></option>
                <?php endwhile; ?>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="Data Lançamento" class="col-sm-2 form-control-label">Data Lançamento: </label>
        <div class="col-sm-4">
            <input class="form-control" value='<?php echo $_GET['data_lancamento']?>' type="date" name="data_lancamento" required/>
        </div>
    </div>
    <input class="btn btn-primary" type="submit" name="edit_livro" value="Cadastrar" />
</form>

<?php echo "<td><a href=actions/livro.php?id=" . $_GET['id'].">Excluir</a></td>" ?>

<?php include_once 'includes/estrutura-bottom.php' ?>