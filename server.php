<?php
    // qui gestiamo il database ed eventualmente se non esistente lo creaiamo vuoto
    if (file_exists('database.json')) {
        $taskString = file_get_contents('database.json');
        $taskList = json_decode($taskString, true);
    } else {
        $taskList = [];
    }

    // qui vengono inserite in database le nuove task
    if(isset($_POST['newTask'])){
        $taskList[] =[
                        'text' =>$_POST['newTask'],
                        'done' => false,
                    ];
        $taskString = json_encode($taskList);
        file_put_contents('database.json', $taskString);
    
    }

    if (isset($_POST['selector'])) {
        $taskList[$_POST['selector']]['done'] = !$taskList[$_POST['selector']]['done'];

        $json_string = json_encode($taskList);
        file_put_contents('database.json', $taskString);
    }





header('Content-Type: application/json');
echo json_encode($taskList);
?>