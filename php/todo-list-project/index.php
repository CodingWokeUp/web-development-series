<?php
    session_start();
    include('config/database.php');
    include('config/tasks.php');
    $obj = new Tasks;
    
    if(isset($_POST['submit'])) {
        // Insert Data in the Table
        $task = $_POST['task'];
        $created_at = $updated_at = date("Y-m-d H:i:s");
        $sql = "INSERT INTO todolists (task, created_at, updated_at) VALUES ('".$task."', '".$created_at."', '".$updated_at."')";
        $res = $obj->insertTask($sql);

        if($res) {
            $_SESSION['success'] = "Task has been created successfully";
        }
        else {
            $_SESSION['error'] = "Something went wrong, please try again later";
        }
        header("LOCATION:index.php");
    }

    //Get all Tasks
    $tasks = $obj->getAllTasks();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../../css/assets/fontawesome/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css"/>
    <title>Todo List Project</title>
</head>
<body>
    <!--Step 1: Basic structure of Todo List-->
    <div class="container">
      <!--Step 2: Create input place and button-->
      <div id="newtask">
        <?php include('include/alert.php') ?>


        <h3>Todo List Project</h3>
        <form action="index.php" method="post" id="taskform">
            <input type="text" name="task" id="task" placeholder="Task to be done..." />
            <button type="submit" name="submit" id="add">Add</button>
        </form>
      </div>

      <div id="tasks">
        <?php
            if(!empty($tasks)) {
                foreach($tasks as $t) {
        ?>
        <div class="task">
            <span><?php echo $t['task'] ?></span>
            <button class="edit"><i class="fa fa-edit"></i></button>
            <button class="delete"><i class="fa fa-trash-alt"></i></button>
        </div>
        <?php }} ?>
      </div>
    </div>

    <script src="assets/js/app.js"></script>
</body>
</html>