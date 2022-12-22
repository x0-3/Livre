<?php

class Auteur{
    private $nom;
    private $prenom;
    private $dateNaissance;
    private array $bibliographie;
    private array $prixTotal;
    private array $total;

    public function __construct($prenom, $nom, $dateNaissance){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->dateNaissance=$dateNaissance;
        $this->bibliographie=[];
        $this->prixTotal=[];

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
        return $dif. "<br>";
    }

    //need to fix
    public function addPrix(Livre $prix){
        $this->prixTotal[]=$prix;
    }

    public function PrixTotal(){
        $total= 0;
        foreach($this->prixTotal as $prix=>$livre){
            $total= $prix*$livre;
            // $montant+=$prix;

        }

        return "Le prix total est de : " .$total. " €<br>";
        
    }
    //
    public function __toString()
    {
        return '<span style="font-size: 25px;">'. "<b>Livres de {$this->prenom} {$this->nom}</b></span><br>";
    }

}


