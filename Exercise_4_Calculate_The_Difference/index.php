<?php

  // Définition de la classe Calculatrice
  class Calculatrice
  {
      // Méthode pour calculer la différence entre deux dates
      public function difference($date1, $date2)
      {
          $diff = strtotime($date2) - strtotime($date1);
          return $diff / 86400;
      }
  }

  // Instanciation de la classe Calculatrice
  $calculatrice = new Calculatrice();

  // Appel de la méthode difference pour calculer la différence entre deux dates
  $diff = $calculatrice->difference("2022-01-01", "2022-12-31");

  // Get date of the first day of the month
  function convert($sum)
  {
      $years = ($sum / 365) ;
      $years = floor($years);
      $month = ($sum % 365) / 30.5;
      $month = floor($month);
      $days = ($sum % 365) % 30.5; // the rest of days
      // Echo all information set
      echo $years.' years - '.$month.' month - '.$days.' days';
  }
  echo "<------------------FIRST VERSION-------------------------------->"."<br><br>";
  echo "La différence entre les deux dates est : $diff jours"."</br></br>";
  convert($diff);
  // Affichage du résultat
  echo "<br><br>"."<------------------OPTIMISED VERSION----------------------->"."<br><br>";
  $origin = new DateTimeImmutable('2000-11-22');
  $target = new DateTimeImmutable('2023-02-07');
  $difference = $origin->diff($target);
  echo $difference->format('%y years, %m months, %d days');
  echo "<br><br>"."<------------------OPTIMISED VERSION----------------------->"."<br><br>";