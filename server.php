<?php

$taskList = [
    [
        'text' => 'Fare da mangiare',
        'done' => true,
    ],
    [
        'text' => 'Ripulire in casa',
        'done'  => false,
    ],
    [
        'text' => 'Fasre spesa',
        'done' => true,
    ],
];

    if(isset($_POST['newTask'])){
        $taskList[] = $_POST['newTask'];
    }


header('Content-Type: application/json');
echo json_encode($taskList);
?>