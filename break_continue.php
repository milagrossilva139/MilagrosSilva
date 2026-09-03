<?php

#BREAK CON CICLO WHILE
$c=1;
while ($c<=20) {
    echo $c. "<br>";
    if ($c==10) {
        break;
    }
    $c++;
}

echo "<br>"; 

#BREAK CON CICLO FOREACH
$pc=["SO","SSD","GPU","RAM","CPU"];
foreach ($pc as $componente) {
    echo $componente."<br>";
    if ($componente=="GPU") {
        break;
    }
}

echo "<br>"; 

#CONTINUE CON CICLO FOREACH
$pc=["SO","SSD","GPU","RAM","CPU"];
foreach ($pc as $componente) {
    if ($componente=="GPU") {
        continue;
    }
    echo $componente."<br>";
}

echo "<br>"; 

#COTINUE CON CICLO FOR
for ($i=1; $i<=10; $i++) {
    if ($i==5) {
        continue;
    }
    echo $i."<br>";
}

echo "<br>";

#CONTINUE CON CICLO WHILE
$i=1;
while ($i<=10) {
    if ($i==3) {
        $i++;
        continue;
    }
    echo $i."<br>";
    $i++;
}