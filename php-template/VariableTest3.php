<?php

include "Variable3.php";

function test(){
  ob_start(); // Start output buffering

  exercice3();
  $output = ob_get_contents(); // Store buffer in variable

  ob_end_clean(); // End buffering and clean up

  if($output == "Bonjour Dupond"){
    echo("TECHIO> success true \r\n");
    echo("TECHIO> message --channel Bravo vous avez réussi l'exercice 3\r\n");
  }else{
    echo("TECHIO> success false  \r\n");
    echo("TECHIO> message --channel Oops l'exercice 3 ne fonctionne pas! Essayez encore 🐞 \r\n");
    echo("TECHIO> message --channel Help Avez-vous mis les majuscules au début du nom et un espace entre les 2 mots? \r\n");
    echo("TECHIO> message --channel Help echo \"Bonjour \".\$nom \r\n");
  }
}
test();

?>
