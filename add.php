<?php
$conn = mysqli_connect("localhost", "root", "", "costume_closet");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$item = $_POST["item"] ?? '';
$borrower = $_POST["borrower"] ?? '';
$due_date = $_POST["due_date"] ?? '';

$sql = "INSERT INTO loans (item, borrower, due_date, returned) 
        VALUES ('$item', '$borrower', '$due_date', 0)";

if (mysqli_query($conn, $sql)) {
    header("Location: list.php");
    exit();
} else {
    echo "Database Error: " . mysqli_error($conn);
}
?>
