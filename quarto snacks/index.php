<!-- quarto snacks -->
<?php

$randomNumber =[];
$index =0;
while ( $index < 15 ){
    $numero = rand(0, 15);
    if(!in_array($numero, $randomNumber )) {            // se non è resente un numero dentro l'array randomNumber, pushami il numeroi casuale dentro l'array randomNumber
        array_push($randomNumber,$numero);
        $index ++;                                      //incrementamelo di 1 
    } 
    
} 
var_dump($randomNumber);

?>