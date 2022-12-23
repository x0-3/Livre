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


    //get function
    function get_nom(){
        return $this->nom;
    }
    function get_prenom(){
        return $this->prenom;
    }
    function get_dateNaissance(){
        return $this->dateNaissance;
    }


    //mettre $livre dans un tableau
    public function addLivres(Livre $livre){
        $this->bibliographie[]=$livre;
    }
    //afficher la bibliographie de l'auteur a l'aide d'un forEach
    public function afficherBibliographie(){
        foreach($this->bibliographie as $livre){
            echo $livre;
        }
    }


    //calculer l'age avec date ajr'd
    public function age(){
        $date= new DateTime();
        $birthday= new DateTime($this->get_dateNaissance());
        $dif= $birthday->diff($date)->format("%Y ans <br>");
        return $dif;
    }


    //afficher le total des livres avec le tableau bibliographie
    public function PrixTotal(){
        $total= 0;

        foreach($this->bibliographie as $prix){
            $total+=$prix->getPrix();
        }
        return "Le prix total est de : " .$total. " €<br>";
  
    }

    //afficher le prénom, nom est l'age de l'auteur
    public function __toString()
    {
        return '<span style="font-size: 25px;">'. "<b>Livres de {$this->prenom} {$this->nom}</b></span><br>{$this->age()}<br>";
    }

}


