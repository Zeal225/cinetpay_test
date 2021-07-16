<?php


//rechercher l'occurrence de chaque lettre composant un mot.
class NombreOccurenceLetteMot
{
    public $mot ;
    public $lettre;

    public function __construct($mot, $lettre)
    {
        $this->mot = $mot;
        $this->lettre = $lettre;
    }

    public function compterOccurence()
    {
        $motTableaux =  str_split($this->mot);
        $tabFinal = [];
        foreach($motTableaux as $lettre){
            $tabFinal[] = $lettre . '' . substr_count($this->mot, $this->lettre);
        }
        return $tabFinal;
    }
}

$obj = new NombreOccurenceLetteMot('anticonstitutionnellaaaemaaaent', 'a');
var_dump($obj->compterOccurence());
