<?php

// Un jeu n'est accessible que pour les enfants mesurant 120 à 150 cm.
// Cette fonction doit tester si l'enfant à la bonne taille
function exercice3($taille){
  // Compléter les conditions
  if($taille){ // Si la taille est inférieur à 120 cm
    return false;
  }else if($taille){ // Si la taille est supérieur à 150 cm
    return false;
  }else{ // Sinon la taille est bonne
    return true;
  }
}

?>
