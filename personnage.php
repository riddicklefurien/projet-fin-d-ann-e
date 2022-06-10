<?php
class personnage{
    public $nom;
    public $arme;
    public $vie;
    public $attaque;
    public function_construct($nom)
    {
        <this->nom=$guerrier;
    }
    
    public function_construct($nom)
    {
        <this->nom=$sorcier;
    }

    
    public function_construct($nom)
    {
        <this->nom=$archer;
    }

    
    public function_construct($nom)
    {
        <this->nom=$prètre;
    }

   
    public function_construct($nom)
    {
        <this->nom=$druide;
    }

    public $faction1=colonie;


    public $faction2=coalition;

    public  function  frapperUnPersonnage ( Personnage  $ persoAFrapper ) {
        if ( $ persoAFrapper -> getId () == $ this -> id ) 
        {
            retour  auto :: DETECT_ME ;
        }

        fonction  publique recevoirUnCoup () {
            $ this -> degats += 5 ;
            if ( $ this -> degats >= 100 ) 
            {
                retour  auto :: PERSO_DEAD ;
                retour  auto :: PERSO_COUP ;
            }

            fonction  publique getAtout () 
            {
                retourne  $ this -> atout ;
            }

            fonction  publique getNom ($guerrier) 
            {
                retourne  $ this -> nom ;
            }
    public function attaque($cible){
        $cible->vie -> $this->attaque;
     }
 }
 ?>
