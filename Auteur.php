<?php

class Auteur{
    private $nom;
    private $prenom;
    

    public function __construct($prenom, $nom){
        $this->nom=$nom;
        $this->prenom=$prenom;
    }

    function get_nom(){
        return $this->nom;
    }

    function get_prenom(){
        return $this->prenom;
    }

    public function __toString()
    {
        return "Livres de {$this->prenom} {$this->nom} <br>";
    }


    // function set_nom(){
    //     return $this->nom;
    // }

    // function set_prenom(){
    //     return $this->prenom;
    // }

}


