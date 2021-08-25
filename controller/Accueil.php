<?php


//namespace LesControllers;


//use LesApp\AbstractController;


class Accueil extends AbstractController
{
//    public function __construct(){
//        au cas ou
//    }


    public function pageAccueil(){
//le this ici appelle la classe accueil : avec la methode de la classe mère abstractcontroller
        $reqDisques = $this->chargerModel('Crud');
        $listeDisques = $reqDisques->trouver();
        $listeArtiste = $reqDisques->listeArtiste();
        $this->afficher('accueil', [
            'lesdiques'=>$listeDisques,
            'lesArtiste'=>$listeArtiste
        ]);
    }

    public function test()
    {
        $this->afficher('test');

    }



}