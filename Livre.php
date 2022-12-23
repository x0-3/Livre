<?php

class Livre{

    private $titre;
    private $parution;
    private $nbPage;
    private $prix;
    private Auteur $auteur;

    public function __construct($titre, $parution, $nbPage, $prix, Auteur $auteur){
        $this->titre=$titre;
        $this->parution=$parution;
        $this->nbPage=$nbPage;
        $this->prix=$prix;
        $this->auteur = $auteur;
        $auteur->addLivres($this);
    }

    //get functions 
    public function getTitre(){
        return $this->titre;
    }
    public function getParution(){
        return $this->parution;
    }
    public function getNbPage(){
        return $this->nbPage;
    }
    public function getPrix(){
        return $this->prix;
    }


    //toString() titre, date de parution, nombre de page et le prix
    public function __toString()
    {
        return "{$this->getTitre()} {$this->getParution()} : {$this->getNbPage()} pages / {$this->getPrix()} € <br>";
    }

}


