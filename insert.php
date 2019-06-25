<?php


if (isset($_POST["taskname"]))
{
    require 'DB.php';
    extract($_POST);
    $sql="INSERT INTO `tasks` VALUES (null,'$taskname','$datetodo','$status')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    // echo "$title $price $quantity $genre";


}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php
require 'navbar.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    Insert Task
                </div>
                <div class="card-body">
                    <form action="insert.php" method="post">


                        <div class="form-group">
                            <label for="title">Task Name</label>
                            <input type="text" class="form-control" name="taskname" required>
                        </div>
                        <div class="form-group">
                            <label for="title">date todo</label>
                            <input type="date" class="form-control" name="datetodo" required>
                        </div>
                        <div class="form-group">
                            <label for="title">status</label>
                            <input type="text" class="form-control" name="status" required>
                        </div>
                        <button class="btn btn-info btn-block">Add Task</button>



                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>