<?php
    include_once("config.php");

    $id = $_GET['id'];


    $sql = "DELETE FROM users WHERE id = :id";

    $getUser = $connect->prepare($sql);
    
    $getUser->bindParam(':id', $id);

    $getUser->execute();

    header("Location:dashboard.php");

?>