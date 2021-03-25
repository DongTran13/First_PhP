<?php
    require ("connectSQL.php");

    $id = $_GET["id"];

    $sql = "DELETE FROM  employee where id = $id";

    $result = $conn ->query($sql);
    header("location: employ_list.php");



?>
