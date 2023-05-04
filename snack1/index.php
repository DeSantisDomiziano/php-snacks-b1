<?php 
/* 
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
*/

$matches = [
    '01/01' => [
        'casa' => 78,
        'ospite' => 58
    ],
    '11/01' => [
        'casa' => 61,
        'ospite' => 20
    ],
    '22/01' => [
        'casa' => 99,
        'ospite' => 103
    ],
    '04/02' => [
        'casa' => 80,
        'ospite' => 82
    ],
    '09/02' => [
        'casa' => 60,
        'ospite' => 60
    ],
    '16/02' => [
        'casa' => 65,
        'ospite' => 80
    ],
    '23/02' => [
        'casa' => 86,
        'ospite' => 78
    ],
    '02/03' => [
        'casa' => 98,
        'ospite' => 67
    ],
    '10/03' => [
        'casa' => 90,
        'ospite' => 105
    ],
];


foreach ($matches as $key => $value) {
    echo "$key <br>";
    foreach ($value as $key => $value) {
        echo "<p><strong>$key: </strong>$value</p>";
    }
};







?>