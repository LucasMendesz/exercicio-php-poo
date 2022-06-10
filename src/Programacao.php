<?php
require_once "Tecnico.php";
class Programacao {
    private string $area;
    

    public function getArea(): string
    {
        return $this->area;
    }

    public function setArea(string $area)
    {
        $this->area = $area;

    }
}


?>