<?php
//get task list array from post
$task_list = filter_input(INPUT_POST, 'tasklist', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);

if($task_list==NULL){
    $task_list = array();
}

//get action variable from post
$action = filter_input(INPUT_POST, 'action');

//init error message array
$errors = array();
$new_task = filter_input(INPUT_POST, 'task');
if(empty($new_task)){
    $errors[] = 'The new task cannot be empty';
}
else{
    $task_list[] = $new_task;
}

include("task_list.php");
?>