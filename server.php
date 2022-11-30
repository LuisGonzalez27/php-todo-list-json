<?php
//prendi contenuto di todo.json
$cont_json = file_get_contents("todo.json");

// per decodificare il contenuto e salvarla in todo_list
$todo_list = json_decode($cont_json, true);

// chiamata axios per restituire 
header('Content-Type: application/json');
echo json_encode($todo_list);