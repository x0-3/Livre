<?php

class Livre{

    private $titre;
    private $parution;
    private $nbPage;
    private $prix;
    private Auteur $auteur;

    public function __construct($titre, $parution, $nbPage, $prix, Auteur $acteur){
        $this->titre=$titre;
        $this->parution=$parution;
        $this->nbPage=$nbPage;
        $this->prix=$prix;
        // $this->auteur = $auteur;
        // $auteur->addLivres($this);
    }

    function getTitre(){
        return $this->titre;
    }
    function getParution(){
        return $this->parution;
    }
    function getNbPage(){
        return $this->nbPage;
    }
    function getPrix(){
        return $this->prix;
    }

    //toString()

}


