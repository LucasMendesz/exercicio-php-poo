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

    require_once "src/Livro.php";
    require_once "src/tecnico.php";
    require_once "src/Programacao.php";
    require_once "src/Didatico.php";

    // Criação dos objetos

    $livro = new Livro;

    // Atribuindo dados via setter do objeto

    $livro->setTitulo("Pai rico Pai pobre");
    $livro->setAutor("Robert T. Kiyosaki");
    $livro->setPaginas(300);


    $tecnico = new Tecnico;

    $tecnico->setFormato(["Digital"]);

    $programacao = new Programacao;

    $programacao->setArea("Web");

    $didatico = new Didatico;

    $didatico->setDisciplina("Matématica");
    $didatico->setNivel(["Ensino médio"]);

    ?>

    <h2>Dados do objetos(leitura via getters)</h2>
    <h3>Nome do livro: <?=$livro->getTitulo()?> </h3>
    <p> <strong> Nome do autor: </strong> <?=$livro->getAutor()?> </p>
    <p> <strong> Quantidade de páginas: </strong> <?=$livro->getPaginas()?> </p>



    <p> <strong> Formato:</strong> <?=implode(", ", $tecnico->getFormato())?></p>
    <p>  <strong> Área: </strong>  <?=$programacao->getArea()?> </p>
    <p>  <strong>  Disciplina: </strong> <?=$didatico->getDisciplina()?> </p>
    <p> <strong>   Nível: </strong> <?=implode(", ", $didatico->getNivel())?></p>

    
    
</body>
</html>