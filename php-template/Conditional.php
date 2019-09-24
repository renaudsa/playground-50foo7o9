<?php

// Si la couleur est "bleu" retourner true et sinon retourner false
public function exercice1($couleur){
  // Compléter la condition
  if($couleur){
    return true;
  }else{
    return false;
  }
}

// Cette fonction teste si la personne est majeure ou non pour l'autoriser à entrer sur un site
public function exercice2($age){
  // Compléter la condition
  if($age){
    return true;
  }else{
    return false;
  }
}

// Un jeu n'est accessible que pour les enfants mesurant 120 à 150 cm.
// Cette fonction doit tester si l'enfant à la bonne taille
public function exercice3($taille){
  // Compléter les conditions
  if($taille){ // Si la taille est inférieur à 120 cm
    return false;
  }else if($taille){ // Si la taille est supérieur à 150 cm
    return false;
  }else{ // Sinon la taille est bonne
    return true;
  }
}

// Un policier fait passer un test d'alcoolémie
// Si de l'alcool est détecté il répond non sinon il répond oui au conducteur pour partir
public function exercice4($alcool){
  // $alcool vaut true s'il y a de l'alcool et false sinon
  // écrivez la condition et retournez "oui" si alcool vaut true
  // retournez "non" si alcool vaut false
  
  return "non";
}

?>
