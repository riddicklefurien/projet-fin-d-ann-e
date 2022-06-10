<?php
print 'selectionnez votre faction'
var_dump ('$faction')
require 'personnage.php';
$guerrier=new personnage("guerrier info");
$joueur=new personnage("joueur");
var_dump($guerrier,$joueur);
$joueur->attaquer($guerrier);
var_dump($joueur);



