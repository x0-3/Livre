<?php

//lien page
include 'Auteur.php';
include 'Livre.php';


//class Auteur
$auteur1= new auteur ("Stephen" ,"King", "21-09-1947");
echo $auteur1;//function __toString()

// Livres
$livre1= new Livre ("Ca", "(1986)", 1138 , 20, $auteur1);
$livre2= new Livre ("Simetierre", "(1983)", 374, 15, $auteur1);
$livre3= new Livre ("Le Fléau", "(1978)", 823, 14, $auteur1);
$livre4= new Livre ("Shining", "(1977)", 447, 16 , $auteur1);

echo $auteur1-> afficherBibliographie()."<br>";//appeler la fonction pour afficher la bibliographie de l'auteur1 
echo $auteur1-> PrixTotal()."<br>";// appeler fonction afficherPrixTotal (to be fixed)


//test 2nd author
$auteur2= new auteur ("Paul" ,"Verlaine", "30-03-1844");
echo $auteur2;//function __toString()

// Livre
$livre5= new Livre ("Sagesse", "(1881)", 1138 , 20, $auteur2);

echo $auteur2-> afficherBibliographie()."<br>";//appeler la fonction pour afficher la bibliographie de l'auteur2
echo $auteur2-> PrixTotal()."<br>";// appeler fonction afficherPrixTotal (to be fixed)



