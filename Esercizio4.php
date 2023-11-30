<?php
$temperature = [
    "Lunedi"=> 25,
    "Martedi"=> 22,
    "Mercoledi"=> 20,
    "Giovedi"=> 19,
    "Venerdi"=> 30,
];

foreach($temperature as $key => $value){
    echo $key . " gradi " . $value . "<br>";
}

"<br>";

echo "La Temperatura massima è :";

echo(array_search(max($temperature),$temperature).": ".max($temperature) . "gradi" . "<br>");







?>