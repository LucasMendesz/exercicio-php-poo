<?php
require_once "Livro.php";
class Tecnico {
    private string $titulo;
    private string $autor;
    private int $paginas = 0;
    private array $formato = ["Digital, Físico"];
    

    public function getTitulo(): string
    {
        return $this->titulo;
    }
    
    public function getAutor(): string
    {
        return $this->autor;

    }


    public function getPaginas(): int
    {
        return $this->paginas;
    }
    
    public function getFormato(): string
    {
        return implode($this->formato);
    }



    public function setTitulo(string $titulo)
    {
        $this->titulo = $titulo;

      
    }
   
    public function setAutor(string $autor)
    {
        $this->autor = $autor;

    }

    
    public function setPaginas(int $paginas)
    {
        $this->paginas = $paginas;

        
    }

   
    public function setFormato(array $formato)
    {
        $this->formato = $formato;

    
    }
}
?>