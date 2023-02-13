<?php

// Définition de la classe Calculatrice
class Calculatrice
{
    // Méthode pour calculer la factorielle d'un nombre
    public function factorielle($n)
    {
        // Initialisation du résultat
        $resultat = 1;

        // Boucle pour multiplier les nombres de 1 à n
        for ($i = 1; $i <= $n; $i++) {
            $resultat *= $i;
        }

        // Renvoi du résultat
        return $resultat;
    }
}

// Instanciation de la classe Calculatrice
$calculatrice = new Calculatrice();

// Appel de la méthode factorielle pour calculer la factorielle de 5
$fact = $calculatrice->factorielle(10);

// Affichage du résultat
echo "La factorielle de 10 est : $fact";