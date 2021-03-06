<?php include_once 'includes/estrutura-top.php'; ?>

<form action="actions/editora.php" method="post">
    <div class="form-group row">
        <label for="Nome" class="col-sm-2 form-control-label">Nome: </label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="nome" required/>
        </div>
    </div>

    <div class="form-group row">
        <label for="Data Fundação" class="col-sm-2 form-control-label">Data Fundação: </label>
        <div class="col-sm-3">
            <input type="date" class="form-control" name="data_fundacao"/>
        </div>
    </div>
    <input type="submit" class="btn btn-primary" name="cad_editora" value="Cadastrar" />
</form>

<table class="table">
    <tr>
        <td>NOME</td>
        <td>Data Fundacao</td>
        <td>Opcoes</td>
    </tr>
    <?php while ($editora = $consulta_editoras->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
            <td><?php echo $editora['nome'] ?></td>
            <td><?php echo $editora['data_fundacao'] ?></td>
            <?php echo "<td><a class='btn btn-primary' href=edit_editora.php?id=" . $editora['id_editora'] . "&nome=" . $editora['nome'] . "&data_fundacao=" . $editora['data_fundacao'] . "><i class='fa fa-search'></i></a></td>" ?>
        </tr>
    <?php endwhile; ?>
</table>

<?php include_once 'includes/estrutura-bottom.php' ?>