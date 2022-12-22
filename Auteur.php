<?php

class Auteur{
    private $nom;
    private $prenom;
    private array $bibliographie;

    public function __construct($prenom, $nom){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->bibliographie=[];
    }

    function get_nom(){
        return $this->nom;
    }

    function get_prenom(){
        return $this->prenom;
    }
    public function addLivres(Livre $livre){
        $this->bibliographie[]=$livre;
    }

    public function afficherBibliographie(){
        foreach($this->bibliographie as $value){
            echo $value;
        }
    }

    public function __toString()
    {
        return '<span style="font-size: 25px;">'. "<b>Livres de {$this->prenom} {$this->nom} </b></span><br>";
    }

}


