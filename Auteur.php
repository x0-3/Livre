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
        return '<span style="font-size: 25px;">'. "<b>Livres de {$this->prenom} {$this->nom} </b></span><br>";
    }


    // function set_nom(){
    //     return $this->nom;
    // }

    // function set_prenom(){
    //     return $this->prenom;
    // }

}


