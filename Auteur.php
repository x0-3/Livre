<?php

class Auteur{
    private $nom;
    private $prenom;
    

    public function __construct($nom, $prenom){
        $this->nom=$nom;
        $this->prenom=$prenom;
    }

    function get_nom(){
        return $this->nom;
    }

    function get_prenom(){
        return $this->prenom;
    }

    // function set_nom(){
    //     return $this->nom;
    // }

    // function set_prenom(){
    //     return $this->prenom;
    // }

}


