<?php
include "Conditional.php";
function test(){
  // Test exercice 3
  if(exercice3(120) && exercice3(150) && exercice3(125) && !exercice3(151) && !exercice3(119)){
    echo("TECHIO> success true \r\n");
    echo("TECHIO> message --channel Bravo vous avez réussi l\'exercice 3\r\n");
  }else{
    echo("TECHIO> success false  \r\n");
    echo("TECHIO> message --channel Oops l'exercice 3 ne fonctionne pas! Essayez encore 🐞 \r\n");
  }
}
test();
?>
