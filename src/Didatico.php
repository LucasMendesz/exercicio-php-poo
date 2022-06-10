<?php

class Didatico {
    private string $disciplina;
    private array  $nivel;

  
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