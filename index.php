<?php

//lien page
include 'Auteur.php';
include 'Livre.php';


//class Auteur
$auteur1= new auteur ("Stephen" ,"King");
echo $auteur1. "<br>";//function __toString()


// Livre Ca
$livre1= new Livre ("Ca", " (1986)", 1138 , 20, $auteur1);
// echo $livre1;

// Livre Simetierre
$livre2= new Livre ("Simetierre", " (1983)", 374, 15, $auteur1);
// echo $livre2;

// Livre Le Fléau
$livre3= new Livre ("Le Fléau", " (1978)", 823, 14, $auteur1);
// echo $livre3;

// Livre Shining
$livre4= new Livre ("Shining", " (1977)", 447, 16 , $auteur1);
// echo $livre4;


echo $auteur1-> afficherBibliographie();//appeler la fonction pour afficher la bibliographie de l'auteur1 



