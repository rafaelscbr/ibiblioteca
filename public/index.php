<?php
include_once 'includes/estrutura-top.php';

if (isset($_GET['exc'])) {
    echo "<script>alert('Excluido com sucesso')</script>";
} elseif (isset($_GET['edit'])) {
    echo "<script>alert('Editado com sucesso')</script>";
} elseif (isset($_GET['cad'])) {
    echo "<script>alert('Cadastrado com sucesso')</script>";
}
?>

<h1>Lista de livros</h1>

<table class="table">
    <tr>
        <td>titulo</td>
        <td>descricao</td>
        <td>categoria</td>
        <td>autor</td>
        <td>editora</td>
        <td>Opções</td>
    </tr>

    <?php while ($livro = $consulta_livros->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
            <td><?php echo $livro['titulo'] ?></td>
            <td><?php echo $livro['descricao'] ?></td>
            <td><?php echo $livro['categoria'] ?></td>
            <td><?php echo $livro['autor'] ?></td>
            <td><?php echo $livro['editora'] ?></td>
            <?php echo "<td><a class='btn btn-primary' href=edit_livro.php?id=" . $livro['id_livros'] . "&titulo=" . urlencode($livro['titulo']) . "&descricao=" . $livro['descricao'] . "&categoria=" . $livro['categoria'] . "&autor=" . $livro['autor'] . "&editora=" . $livro['editora'] . "&data_lancamento=" . $livro['data_lancamento'] . "><i class='fa fa-search'></i></a></td>" ?>
        </tr>
    <?php endwhile; ?>

</table>

</div>

<?php include_once 'includes/estrutura-bottom.php' ?>