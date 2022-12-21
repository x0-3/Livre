<?php

//lien page
include 'Auteur.php';
include 'Livre.php';


//class Auteur
$auteur1= new auteur ("Stephen" ,"King");

echo "Livres de ". $auteur1-> get_nom(). " ";
echo $auteur1-> get_prenom(). "<br>";

echo "<br>";


//class Livre

// Livre Ca
$livre1= new Livre ("Ca", " (1986)", 1138 , 20, $auteur1 );

// echo $livre1-> getTitre() ;
// echo $livre1-> getParution(). " : ";
// echo $livre1-> getNbPage()." pages ";
// echo " / " . $livre1-> getPrix(). "<br>";

// Livre Simetierre
$livre2= new Livre ("Simetierre", " (1983)", 374, 15, $auteur1 );

// echo $livre2-> getTitre() ;
// echo $livre2-> getParution(). " : ";
// echo $livre2-> getNbPage()." pages ";
// echo " / " . $livre2-> getPrix(). "<br>";

// Livre Le Fléau
$livre3= new Livre ("Le Fléau", " (1978)", 823, 14, $auteur1);

// echo $livre3-> getTitre() ;
// echo $livre3-> getParution(). " : ";
// echo $livre3-> getNbPage()." pages ";
// echo " / " . $livre3-> getPrix(). "<br>";

// Livre Shining
$livre4= new Livre ("Shining", " (1977)", 447, 16 , $auteur1);

// echo $livre4-> getTitre() ;
// echo $livre4-> getParution(). " : ";
// echo $livre4-> getNbPage()." pages ";
// echo " / " . $livre4-> getPrix(). "<br>";