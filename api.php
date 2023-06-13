<?php 

$toDoList = [
    [
        'name' => 'Portare fuori il cane',
        'status' => true,
    ],
    [
        'name' => 'Preparare la cena',
        'status' => false,
    ],
    [
        'name' => 'Portare fuori la spazzaura',
        'status' => false,
    ],
    [
        'name' => 'Andare in palestra',
        'status' => true,
    ],
];

header('Content-Type: application/json');

$stringaDati = json_encode($toDoList);

echo $stringaDati;


?>