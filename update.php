<?php
$conn = mysqli_connect("localhost", "root", "", "costume_closet");
$id = (int) $_GET["id"];
mysqli_query($conn, "UPDATE loans SET returned = 1 WHERE id = $id");
header("Location: list.php");
exit();
?>
