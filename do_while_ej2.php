<?php

$c=1;
$num=8;

do {
    echo $num." x ". $c. " = ". $c*$num. "<br>";
    $c++;
} while ($c<=12);

echo "<br>";

$c=12;

do {
    echo $num." x ". $c. " = ". $c*$num. "<br>";
    $c--;
} while ($c>=1);