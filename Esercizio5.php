<?php
$words = [
    "casa" => 4,
    "albero" => 6,
    "macchina" => 7,
    "latumamma" => 9
];
foreach ($words as $key=>$value) {
    echo $key . ': ' . $value . "<br>";
}

echo "La parola più lunga è:";

$maxLenght = max($words);

foreach ($words as $word => $length) {
    if ($length == $maxLenght) {
        echo $word . "<br>";
    }
}
?>