<?php include_once 'includes/estrutura-top.php' ?>
<?php include_once 'helpers/querys.php' ?>

<h1>Busca de livros</h1>

<?php include_once 'includes/menu.php' ?>
<br/>
<table border='1'>
    <tr>
        <td>titulo</td>
        <td>descricao</td>
        <td>categoria</td>
        <td>autor</td>
        <td>editora</td>
        <td>Opções</td>
    </tr>
    <tr>
        <?php while ($livro = $consulta_livros->fetch(PDO::FETCH_ASSOC)): ?>
            <td><?php echo $livro['titulo'] ?></td>
            <td><?php echo $livro['descricao'] ?></td>
            <td><?php echo $livro['categoria'] ?></td>
            <td><?php echo $livro['autor'] ?></td>
            <td><?php echo $livro['editora'] ?></td>
            <?php echo "<td><a href=edit_livro.php?id=" . $livro['id_livros'] . "&titulo=" . urlencode($livro['titulo']) . "&descricao=" . $livro['descricao'] . "&categoria=".$livro['categoria']."&autor=".$livro['autor']."&editora=".$livro['editora']."&data_lancamento=".$livro['data_lancamento'] . ">Opções</a></td>" ?>

        <?php endwhile; ?>
    </tr>
</table>



<?php include_once 'includes/estrutura-bottom.php' ?>