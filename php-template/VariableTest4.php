<?php

include "Variable4.php";

function test(){
  ob_start(); // Start output buffering

  exercice4();
  $output = ob_get_contents(); // Store buffer in variable

  ob_end_clean(); // End buffering and clean up

  if($output == "Total : 15000 metres pour 191250 dollars"){
    echo("TECHIO> success true \r\n");
    echo("TECHIO> message --channel Bravo vous avez réussi l'exercice 4\r\n");
  }else{
    echo("TECHIO> success false  \r\n");
    echo("TECHIO> message --channel Oops l'exercice 4 ne fonctionne pas! Essayez encore 🐞 \r\n");
    echo("TECHIO> message --channel Help Vous devez effectuer les multiplications entre les variables déclarées au début de l'exercice. Vous pouvez utiliser \$totalLongueur dans la 2ième multiplication. \r\n");
    echo("TECHIO> message --channel Help Pensez aussi à compléter le echo \r\n");
  }
}
test();

?>
