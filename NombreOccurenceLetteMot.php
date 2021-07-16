<?php
//*********PROBLEME 2***************
//le nombre de lette dans un mot
class NombreOccurenceLetteMot
{
    public $mot ;

    /**
     * NombreOccurenceLetteMot constructor.
     * @param $mot
     */
    public function __construct($mot)
    {
        $this->mot = $mot;
    }

    /**
     * @return array
     */
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
