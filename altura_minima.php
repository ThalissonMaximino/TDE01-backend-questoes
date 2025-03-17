<?php

$linha1 = trim(fgets(STDIN));
$linha2 = trim(fgets(STDIN));

$valores = explode(" ", $linha1);
$N = (int)$valores[0]; 
$H = (int)$valores[1]; 

$alturas = explode(" ", $linha2); 

$quantidade = 0; 

for ($i = 0; $i < $N; $i++) {
    if ($H >= (int)$alturas[$i]) {
        $quantidade++;
    }
}

echo $quantidade . "\n";

?>
