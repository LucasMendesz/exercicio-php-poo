<?php
namespace Project;

class Tecnico  extends Livro{
    private array $formato = ["Digital, Físico"];
    

    
    public function getFormato(): string
    {
        return implode($this->formato);
    }

   
    public function setFormato(array $formato)
    {
        $this->formato = $formato;

    
    }
}
?>