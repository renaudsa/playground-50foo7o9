<?php
include "Conditional.php";
function test(){
  // Test exercice 2
  if(exercice2(18) && exercice2(20) && !exercice2(15)){
    echo("TECHIO> success true \r\n");
    echo("TECHIO> message --channel Bravo vous avez réussi l\'exercice 2\r\n");
  }else{
    echo("TECHIO> success false  \r\n");
    echo("TECHIO> message --channel Oops l'exercice 2 ne fonctionne pas! Essayez encore 🐞 \r\n");
  }
}
test();
?>
