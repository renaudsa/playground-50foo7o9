<?php

include "Variable1.php";

function test(){
  ob_start(); // Start output buffering
  exercice1();
  $output = ob_get_contents(); // Store buffer in variable

  ob_end_clean(); // End buffering and clean up

  if($output == "Hello world"){
    echo("TECHIO> success true \r\n");
    echo("TECHIO> message --channel Bravo vous avez réussi l'exercice 1\r\n");
  }else{
    echo("TECHIO> success false  \r\n");
    echo("TECHIO> message --channel Oops l'exercice 1 ne fonctionne pas! Essayez encore 🐞 \r\n");
  }
}
test();

?>
