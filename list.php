<?php
$conn = mysqli_connect("localhost", "root", "", "costume_closet");
if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }

$sql = "SELECT id, item, borrower, due_date, returned FROM loans WHERE returned = 0 ORDER BY item";
$result = mysqli_query($conn, $sql);
$row_count = mysqli_num_rows($result);
?>

<?php if ($row_count > 0): ?>
    <table border="1">
        <tr>
            <th>item</th>
            <th>borrower</th>
            <th>due_date</th>
            <th>returned</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo htmlspecialchars($row["item"]); ?></td>
            <td><?php echo htmlspecialchars($row["borrower"]); ?></td>
            <td><?php echo htmlspecialchars($row["due_date"]); ?></td>
            <td><?php echo htmlspecialchars($row["returned"]); ?></td>
            <td><a href="update.php?id=<?php echo $row["id"]; ?>">Mark returned</a></td>
            <td><a href="delete.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Are you sure?');">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
<?php else: ?>
    <p>No loans yet. The closet is empty!</p>
    <a href="form.php">Add borrowed items</a>
<?php endif; ?>

<?php 
mysqli_close($conn); 
?>
