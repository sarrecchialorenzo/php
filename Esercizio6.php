<?php
$students=[
    "001" =>"Giovanni",
    "002" =>"Andrea",
    "003"=>"Chiara",
    "004"=>"Sara",
];
$searchStudent = "Sara";
$key=(array_search($searchStudent,$students));

if ($key !== false){
    echo "Lo studente : " .$searchStudent . " ha matricola : ". $key;
}
else{
    echo "lo studente non è registrato " .$searchStudent . "<br>";
}










?>