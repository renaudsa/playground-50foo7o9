<?php

include "Conditional.php";

function test(){

  // Test exercice 1
  if(exercice1("bleu") && !exercice1("rouge")){
    echo("TECHIO> success true \r\n");
    echo("TECHIO> message --channel Bravo vous avez réussi l\'exercice 1\r\n");
  }else{
    echo("TECHIO> success false  \r\n");
    echo("TECHIO> message --channel Oops l'exercice 1 ne fonctionne pas! Essayez encore 🐞 \r\n");
  }
  
  // Test exercice 2
  if(exercice2(18) && exercice2(20) && !exercice2(15)){
    echo("TECHIO> success true \r\n");
    echo("TECHIO> message --channel Bravo vous avez réussi l\'exercice 2\r\n");
  }else{
    echo("TECHIO> success false  \r\n");
    echo("TECHIO> message --channel Oops l'exercice 2 ne fonctionne pas! Essayez encore 🐞 \r\n");
  }
  
  // Test exercice 3
  if(exercice3(120) && exercice3(150) && exercice3(125) && !exercice3(151) && !exercice3(119)){
    echo("TECHIO> success true \r\n");
    echo("TECHIO> message --channel Bravo vous avez réussi l\'exercice 3\r\n");
  }else{
    echo("TECHIO> success false  \r\n");
    echo("TECHIO> message --channel Oops l'exercice 3 ne fonctionne pas! Essayez encore 🐞 \r\n");
  }
  
  // Test exercice 4
  if(exercice4(true) == "non" && exercice4(false) == "oui"){
    echo("TECHIO> success true \r\n");
    echo("TECHIO> message --channel Bravo vous avez réussi l\'exercice 4\r\n");
  }else{
    echo("TECHIO> success false  \r\n");
    echo("TECHIO> message --channel Oops l'exercice 4 ne fonctionne pas! Essayez encore 🐞 \r\n");
  }
}

test();

?>
