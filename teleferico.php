<?php

$C = (int)trim(fgets(STDIN));
$A = (int)trim(fgets(STDIN));

$viagens = 0;

while ($A > 0) {
    $A -= ($C - 1);
    $viagens++;
}

echo $viagens . "\n";

?>
