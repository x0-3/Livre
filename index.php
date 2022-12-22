<?php

//lien page
include 'Auteur.php';
include 'Livre.php';


//class Auteur
$auteur1= new auteur ("Stephen" ,"King");

echo $auteur1->__toString();


echo "<br>";


//class Livre

// Livre Ca
$livre1= new Livre ("Ca", " (1986)", 1138 , 20, $auteur1 );
echo $livre1->__toString();

// Livre Simetierre
$livre2= new Livre ("Simetierre", " (1983)", 374, 15, $auteur1 );
echo $livre2->__toString();

// Livre Le Fléau
$livre3= new Livre ("Le Fléau", " (1978)", 823, 14, $auteur1);
echo $livre3->__toString();

// Livre Shining
$livre4= new Livre ("Shining", " (1977)", 447, 16 , $auteur1);
echo $livre4->__toString();
