<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <title>iBiblioteca</title>
    </head>
    <body>
        <form action="" method="post">
            <label for="exemplo">Nome: </label>
            <input type="text" name="nome"/>
            <label for="exemplo">Sobre Nome: </label>
            <input type="text" name="sobrenome"/>
            <label for="exemplo">Data de Nascimento: </label>
            <input type="date" name="data_nascimento"/>
            <label for="exemplo">Data de Obito: </label>
            <input type="date" name="data_obito"/>
            <input type="submit" value="Cadastrar" />
        </form>
        
        <div class="links"><a href="cad_autor.php">Cadastro de Autor</a> | <a href="cad_editora.php">Cadastro de Editora</a> | <a href="cad_livro.php">Cadastro de Livro</a></div>
    </body>
</html>