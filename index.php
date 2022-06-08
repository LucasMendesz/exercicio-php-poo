<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP POO</title>
</head>
<body>
    <h1>Exercicio</h1>
    <hr>

    <?php
    // Importando a classe

    require_once "src/Classe.php";

    // Criação dos objetos

    $livro = new Livro;

    // Atribuindo dados via setter do objeto

    $livro->setTitulo("Pai rico Pai pobre");
    $livro->setAutor("Robert T. Kiyosaki");
    $livro->setPaginas(0);
    ?>

    <h2>Dados do objetos(leitura via getters)</h2>
    <h3> <?=$livro->getTitulo()?> </h3>
    <h3> <?=$livro->getAutor()?> </h3>
    <h3> <?=$livro->getPaginas()?> </h3>
    
    
</body>
</html>