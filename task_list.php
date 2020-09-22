<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
    <link rel="stylesheet" type="text/css" href="main.css"
</head>
<body>
    <header>
        <h1>Task List Manager</h1>
    </header>
    <!-- Part 1: The Errors-->
    <!-- Part 2: The Tasks-->
    <h2>Tasks</h2>
    <?php if (count($task_list)== 0): ?>
        <p>There are no tasks in the task list.</p>
    <?php else:?>
        <ul>
            <?php foreach($task_list as $id => $task):?>
                <li><?php echo $id+1 . '. ' . htmlspecialchars($task);?></li>
            <?php endforeach;?>
        </ul>
    <?php endif;?>
    <!-- Part 3: The Add Form-->
    <h2>Add Task</h2>
    <form action="." method="post">
        <?php foreach ($task_list as $task): ?>
        <input type="hidden" name="tasklist[]" value="<?php echo htmlspecialchars($task);?>">
        <?php endforeach;?>
        <input type="hidden" name="action" value="add">
        <label>Task</label>
        <input type="text" name="task"><br>
        <label>&nbsp</label>
        <input type="submit" value="Add Task">
    </form>
</body>
</html>

<?php
