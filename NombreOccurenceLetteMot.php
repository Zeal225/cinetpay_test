<?php


class NombreOccurenceLetteMot
{
    public $mot ;

    public function __construct($mot)
    {
        $this->mot = $mot;
    }

    public function compterOccurence()
    {
        $motTableaux =  str_split($this->mot);
        $tabFinal = [];
        foreach($motTableaux as $lettre){
            $tabFinal[] = $lettre . '' . substr_count($this->mot, $lettre);
        }
        return array_unique($tabFinal);
    }
}

$obj = new NombreOccurenceLetteMot('anticonstitutionnellaaaemaaaent');
var_dump($obj->compterOccurence());
