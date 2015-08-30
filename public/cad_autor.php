<?php include_once 'includes/estrutura-top.php'; ?>

<form action="/actions/autor.php" method="post">

    <div class="form-group row">
        <label for="Nome" class="col-sm-2 form-control-label">Nome: </label>
        <div class="col-sm-6">
            <input class="form-control" type="text" name="nome" required/>
        </div>
    </div>

    <div class="form-group row">
        <label for="Sobre nome" class="col-sm-2 form-control-label">Sobre Nome </label>
        <div class="col-sm-6">
            <input class="form-control" type="text" name="sobrenome" required/>
        </div>
    </div>

    <div class="form-group row">
        <label for="Nome" class="col-sm-2 form-control-label">Data Nascimento: </label>
        <div class="col-md-3">
            <input class="form-control" type="date" name="data_nascimento"/>
        </div>
    </div>

    <div class="form-group row">
        <label for="Nome" class="col-sm-2 form-control-label">Data Obito: </label>
        <div class="col-md-3">
            <input class="form-control" type="date" name="data_obito"/>
        </div>
    </div>

    <input class="btn btn-primary" type="submit" name="cad_autor" value="Cadastrar" />

</form>

<table class="table">
    <tr>
        <td>nome</td>
        <td>sobrenome</td>
        <td>data_nascimento</td>
        <td>data_obito</td>
        <td>Opções</td>
    </tr>

    <?php while ($autor = $consulta_autores->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
            <td><?php echo $autor['nome'] ?></td>
            <td><?php echo $autor['sobrenome'] ?></td>
            <td><?php echo $autor['data_nascimento'] ?></td>
            <td><?php echo $autor['data_obito'] ?></td>
            <?php echo "<td><a class='btn btn-primary' href=edit_autor.php?id=" . $autor['id_autor'] . "&nome=" . $autor['nome'] . "&sobrenome=" . $autor['sobrenome'] . "&data_nascimento=" . $autor['data_nascimento'] . "&data_obito=" . $autor['data_obito'] . "><i class='fa fa-search'></i></a></td>" ?>
        </tr>
    <?php endwhile ?>
</table>

<?php include_once 'includes/estrutura-bottom.php'; ?>

