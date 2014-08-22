<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <title>iBiblioteca</title>
    </head>
    <body>
        <form action="" method="post">
            <label for="exemplo">Titulo: </label>
            <input type="text" name="titulo"/>
            <label for="exemplo">Descrição: </label>
            <input type="text" name="descricao"/>
            <label for="exemplo">Categoria </label>
            <input type="text" name="categoria"/>
            <label for="exemplo">Autor: </label>
            <input type="text" name="autor"/>
            <label for="exemplo">Editora: </label>
            <input type="text" name="editora"/><br/>
            <label for="exemplo">Data de Lançamento: </label>
            <input type="date" name="data_lacamento"/>
            <input type="submit" value="Cadastrar" />
        </form>
        
        <div class="links"><a href="cad_autor.php">Cadastro de Autor</a> | <a href="cad_editora.php">Cadastro de Editora</a> | <a href="cad_livro.php">Cadastro de Livro</a></div>
    </body>
</html>