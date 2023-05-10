<?php

$num_vezes = readline("Número de moedas: ");
$m = 0;
$j = 0;

for ($i = 0; $i < $num_vezes; $i++) {

  $aleatorio = rand(0, 1);

  echo $aleatorio;

}

 for($x = 0; $x < strlen($aleatorio); $x++) {
  $vetor = str_split($aleatorio);

   echo $vetor;
   }

