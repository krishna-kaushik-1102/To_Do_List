<?php
require_once('config.php');

if ($_GET["id"]) {
    $id = $_GET["id"];
    $sql = "DELETE FROM tasks WHERE id = $id";
    mysqli_query($conn, $sql);
}

header("Location: index1.php");
?>
