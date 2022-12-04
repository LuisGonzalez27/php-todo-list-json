<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-Requested-With");

$file_url = './todo.json';

//prendi contenuto di todo.json
$file_text = file_get_contents($file_url);

// per decodificare il contenuto e salvarla in todo_list
$todo_list = json_decode($file_text);

if (isset($_POST['newTodoText'])){
    $newTodo = [
        'text' => $_POST['newTodoText'],
        'done' => false, 
    ];
    array_push($todo_list, $newTodo);

    // salvare nel file un oggeto convertito in json
    file_put_contents($file_url, json_encode($todo_list));

} else {
    // chiamata axios per restituire 
    header('Content-Type: application/json');
    echo json_encode($todo_list);
}