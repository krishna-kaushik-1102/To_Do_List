<?php
require_once('config.php');

if ($_GET["id"] && $_GET["completed"]) {
    $id = $_GET["id"];
    $completed = $_GET["completed"] ? 1 : 0;
    $sql = "UPDATE tasks SET completed = $completed WHERE id = $id";
    mysqli_query($conn, $sql);
}

header("Location: index1.php");
?>
