<?php 

$toDoList = [
    [
        'name' => 'Cane',
        'status' => true,
    ],
    [
        'name' => 'Cucinare',
        'status' => false,
    ],
    [
        'name' => 'Spazzatura',
        'status' => false,
    ],
    [
        'name' => 'Palestra',
        'status' => true,
    ],
];

header('Content-Type: application/json');

$stringaDati = json_encode($toDoList);

echo $stringaDati;


?>