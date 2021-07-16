<?php

//*********PROBLEME 2***************

//chercher le nombre d'occurence d'un mot dans un tableau
class NombreOccurenceMot
{
    public $tableauMots ;
    public $mot;
    public $nombre = 0;

    /**
     * NombreOccurenceMot constructor.
     * @param array $tableauMot
     * @param $mot
     */
    public function __construct(array $tableauMot, $mot)
    {
        $this->tableauMots = $tableauMot;
        $this->mot = $mot;
    }

    /**
     * @return int
     */
    public function compterOccurence()
    {
        foreach ($this->tableauMots as $tableauMot){
            $tableauMot =  str_replace(" ", '', $tableauMot);
            $this->mot =  str_replace(" ", '', $this->mot);
           if ($tableauMot === $this->mot){
              $this->nombre++;
           }
        }
        if ($this->nombre <= 0){
            $this->nombre = -1;
        }
        return $this->nombre;
    }
}

$obj = new NombreOccurenceMot(['un','un', 'deux', 'cela', 'trois', 'deux', 'deux'], "");
echo $obj->compterOccurence();