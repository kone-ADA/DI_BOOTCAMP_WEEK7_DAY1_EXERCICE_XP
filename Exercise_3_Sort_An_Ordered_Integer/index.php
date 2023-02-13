<?php


  // Définition de la classe Trieur
  class Trieur
  {
      // Propriété privée qui contiendra le tableau à trier
      private $tableau;

      // Constructeur qui initialise la propriété tableau
      public function __construct(array $tableau)
      {
          $this->tableau = $tableau;
      }

      // Méthode pour trier le tableau en ordre croissant
      public function trier()
      {
          sort($this->tableau);
      }

      // Méthode pour afficher le tableau
      public function afficher()
      {
          echo implode(", ", $this->tableau);
      }
  }

  // Instanciation de la classe Trieur
  $trieur = new Trieur([8, 5, 9, 3, 1]);

  // Appel de la méthode trier pour trier le tableau
  $trieur->trier();

  // Appel de la méthode afficher pour afficher le tableau
  echo "Tableau trié : ";
  $trieur->afficher();