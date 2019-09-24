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
}
test();
?>
