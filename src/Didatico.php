<?php
class Didatico extends Programacao {
    
    private string $disciplina;
    private array  $nivel = ["Básico", "Médio", "Superior"];

    

    public function getDisciplina(): string
    {
        return $this->disciplina;
    }

    public function getNivel(): array
    {
        return $this->nivel;
    }
    
    public function setDisciplina(string $disciplina)
    {
        $this->disciplina = $disciplina;

    }

    
    public function setNivel(array $nivel)
    {
        $this->nivel = $nivel;

        
    }

   

   
   

    
    

    
   

  
   
   
   

   

    
  

  
  

    
    
    }



?>