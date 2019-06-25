<?php
if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    require 'DB.php';
    $sql="select * from tasks where task_id=$id";
    $result= mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    extract($row);
}
if(isset($_POST["task_name"]))
{
    $task_name= $_POST ["task_name"];
    $date_todo= $_POST ["date_todo"];
    $status=$_POST["status"];
    $id=$_POST["id"];
    require 'DB.php';
    $sql="update tasks set task_name='$task_name',date_todo='$date_todo',status='$status' where task_id=$id";
    mysqli_query($conn,$sql) or die(mysqli_error($conn));
    header("location:view.php");
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update task</title>

    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php
require 'navbar.php';
?>
<div class="cotainer">
    <div class="row justify-content-center">
        <div class="col-sm-6">

            <div class="card">
                <div class="card-header">
                    updating task <?= $task_id?>
                </div>


                    <?php
                    if (isset($message))
                        echo "<p class='text-danger'>$message</p>"
                    ?>

                    <form action="update.php" method="post" >

                        <input type="hidden" name="id" value="<?=$task_id?>">

                        <div class="form-group">
                            <label for="task_name">Task Name</label>
                            <input type="text"  value="<?=$task_name?>" class="form-control" name="task_name" required>
                        </div>

                        <div class="form-group">
                            <label for="date_todo">date todo</label>
                            <input type="date" value="<?=$date_todo?>" class="form-control" name="date_todo" required>
                        </div>

                        <div class="form-group">
                            <label for="status">status</label>
                            <input type="text" value="<?=$status?>" class="form-control" name="status" required>
                        </div>



                        <button class="btn btn-info btn-block">Update task</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
</body>