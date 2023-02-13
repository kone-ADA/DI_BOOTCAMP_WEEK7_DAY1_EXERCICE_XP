<?php

  // Définition de la classe Afficheur
  class Afficheur
  {
      // Propriété privée qui contiendra la chaîne à afficher
      private $str;

      // Constructeur qui initialise la propriété str
      public function __construct($str)
      {
          $this->str = $str;
      }

      // Méthode pour afficher la chaîne
      public function display()
      {
          echo $this->str;
      }
  }

  // Instanciation de la classe Afficheur
  $afficheur = new Afficheur("MyClass class has initialized ! ");

  // Appel de la méthode afficher pour afficher la chaîne
  $afficheur->display();