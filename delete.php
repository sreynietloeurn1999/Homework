<?php
    include "connect.php";
    $id = $_GET['id'];
    $delete = mysqli_query($connect,"DELETE FROM my_family WHERE id=$id");
    header("Location:index.php");
?>