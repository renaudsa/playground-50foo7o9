<?php
include "Conditional4.php";
function test(){
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
