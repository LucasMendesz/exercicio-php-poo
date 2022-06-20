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

    // //require_once "src/Livro.php";
    // require_once "src/tecnico.php"; // Subclasse
    // require_once "src/Programacao.php"; // Subclasse
    // require_once "src/Didatico.php"; // Subclasse
 require_once "vendor/autoload.php";
    // Criação dos objetos

    //$livro = new Livro;

    // Atribuindo dados via setter do objeto

    // $livro->setTitulo("Pai rico Pai pobre");
    // $livro->setAutor("Robert T. Kiyosaki");
    // $livro->setPaginas(300);

    use Project\ {Tecnico, Programacao, Didatico};



    // Obejto Técnico
    $tecnico = new Tecnico;
    $tecnico->setTitulo("HTML5");
    $tecnico->setAutor("José ferreira da silva");
    $tecnico->setPaginas(155);
    $tecnico->setFormato(["Digital"]);

    // Objeto Programação
    $programacao = new Programacao;
    $programacao->setTitulo("PHP 8");
    $programacao->setAutor("Francisco da silva");
    $programacao->setPaginas(266);
    $programacao->setFormato(["Físico"]);
    $programacao->setArea("Web");

    // Objeto Didático
    $didatico = new Didatico;
    $didatico->setTitulo("CSS3");
    $didatico->setAutor("Lucas Mendes de Araujo");
    $didatico->setPaginas(65);
    $didatico->setFormato(["Digital"]);
    $didatico->setDisciplina("Matématica");
    $didatico->setNivel(["Superior"]);

    // Objeto Web
    $livroWeb = new Project\Web;

    ?>

<pre> <?=var_dump($tecnico, $programacao, $didatico)?></pre>
   

    <!-- Objeto técnico -->
    <h3>Dados Técnico</h3>
    <p> <strong>Título: <?=$tecnico->getTitulo()?> </strong></p>
    <p> <strong>Autor: <?=$tecnico->getAutor()?> </strong></p>
    <p> <strong>Páginas: <?=$tecnico->getPaginas()?> </strong></p>
    <p> <strong>Formato:</strong> <?=$tecnico->getFormato()?></p>

    <hr>
     

    <!-- Objeto Programação -->
    <h3>Dados Programação</h3>
    <p>  <strong> Título: </strong>  <?=$programacao->getTitulo()?> </p>
    <p>  <strong> Autor: </strong>  <?=$programacao->getAutor()?> </p>
    <p>  <strong> Páginas: </strong> <?=$programacao->getPaginas()?> </p>
    <p>  <strong> Formato: </strong>  <?=$programacao->getFormato()?> </p>
    <p>  <strong> Área: </strong>  <?=$programacao->getArea()?> </p>

    <hr>


    <!-- Objeto Didático -->
    <h3>Dados Didático</h3>
    <p>  <strong> Título: </strong>  <?=$didatico->getTitulo()?> </p>
    <p>  <strong> Autor: </strong>  <?=$didatico->getAutor()?> </p>
    <p>  <strong>  Páginas: </strong> <?=$didatico->getPaginas()?> </p>
    <p>  <strong> Formato: </strong>  <?=$didatico->getFormato()?> </p>
    <p>  <strong> disciplina: </strong>  <?=$didatico->getDisciplina()?> </p>
    <p> <strong>   Nível: </strong> <?=implode(", ", $didatico->getNivel())?></p>
    <hr>


    <p> <?=$tecnico->formataTitulo($tecnico->getTitulo())?> </p>
    <p> <?=$programacao->formataTitulo($programacao->getTitulo())?> </p>
    




</body>
</html>