<?php
$conn = mysqli_connect("localhost", "root", "", "costume_closet");
$id = (int) $_GET["id"];
mysqli_query($conn, "DELETE FROM loans WHERE id = $id");
header("Location: list.php");
exit();
?>
