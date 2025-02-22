<?php


$array =
[
    ["imie"=>"Karol", "nazwisko"=>"May", "wiek"=>37],
    ["imie"=>"Joanna", "nazwisko"=>"May", "wiek"=>30],
    ["imie"=>"Helenka", "nazwisko"=>"May", "wiek"=>0]
];

echo "<pre>";
foreach ($array as $osoba) {
    echo var_dump($osoba);
}

