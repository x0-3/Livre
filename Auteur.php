<?php

class Auteur{
    private $nom;
    private $prenom;
    private $dateNaissance;
    private array $bibliographie;

    public function __construct($prenom, $nom, $dateNaissance){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->dateNaissance=$dateNaissance;
        $this->bibliographie=[];
    }

    function get_nom(){
        return $this->nom;
    }

    function get_prenom(){
        return $this->prenom;
    }

    function get_dateNaissance(){
        return $this->dateNaissance;
    }

    public function addLivres(Livre $livre){
        $this->bibliographie[]=$livre;
    }

    public function afficherBibliographie(){
        foreach($this->bibliographie as $livre){
            echo $livre;
        }
    }

    public function age(){
        $date=new DateTime();
        $birthday= new DateTime($this->get_dateNaissance());
        $dif= $birthday->diff($date)->format("%Y ans <br>");

        return $dif;
    }

    // public function prixTotal(){
    //     echo "Prix total : <br>";
    // }

    public function __toString()
    {
        return '<span style="font-size: 25px;">'. "<b>Livres de {$this->prenom} {$this->nom}</b></span><br>";
    }

}


