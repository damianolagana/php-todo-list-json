<?php 

$toDoList = [
    [
        'name' => 'Cane',
        'description' => 'Portare fuori il cane',
        'status' => true,
    ],
    [
        'name' => 'Cucinare',
        'description' => 'Preparare la cena',
        'status' => false,
    ],
    [
        'name' => 'Spazzatura',
        'description' => 'Portare fuori la spazzatura',
        'status' => false,
    ],
    [
        'name' => 'Palestra',
        'description' => 'Andare in palestra',
        'status' => true,
    ],
];

header('Content-Type: application/json');

$stringaDati = json_encode($toDoList);

echo $stringaDati;


?>