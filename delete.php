<?php

if(isset($_GET['id']))
{
    $id=$_GET['id'];
  //  extract($_GET);
    require 'DB.php';
    $sql="delete from tasks where task_id = $id";
   // DELETE FROM `tasks` WHERE 0
    mysqli_query($conn, $sql);
}

 header("location:view.php");//redirect to view.php

?>