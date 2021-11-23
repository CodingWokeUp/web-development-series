<?php
    //Database Connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "todoproject";

    //Create Connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    //echo "<pre>"; print_r($conn); exit;

    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }

    // Insert Data in the Table
    $task = "Testing Task";
    $created_at = $updated_at = date("Y-m-d H:i:s");
    $sql = "INSERT INTO todolists (task, created_at, updated_at) VALUES ('".$task."', '".$created_at."', '".$updated_at."')";
    $res = $conn->query($sql);
    if($res)
        echo "Data inserted";
    else
        echo "Query failed";

    $conn->close();
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
        <h3>Todo List Project</h3>
        <form action="index.php" method="post" id="taskform">
            <input type="text" name="task" id="task" placeholder="Task to be done..." />
            <button type="submit" name="submit" id="add">Add</button>
        </form>
      </div>

      <div id="tasks">
        <div class="task">
            <span>YouTube video recording</span>
            <button class="edit"><i class="fa fa-edit"></i></button>
            <button class="delete"><i class="fa fa-trash-alt"></i></button>
        </div>

        <div class="task">
            <span>Meeting with the client</span>
            <button class="edit"><i class="fa fa-edit"></i></button>
            <button class="delete"><i class="fa fa-trash-alt"></i></button>
        </div>

        <div class="task">
            <span>Meeting with John at 1 pm</span>
            <button class="edit"><i class="fa fa-edit"></i></button>
            <button class="delete"><i class="fa fa-trash-alt"></i></button>
        </div>

        <div class="task">
            <span>FB & Insta campaign monitoring</span>
            <button class="edit"><i class="fa fa-edit"></i></button>
            <button class="delete"><i class="fa fa-trash-alt"></i></button>
        </div>
      </div>
    </div>

    <script src="assets/js/app.js"></script>
</body>
</html>