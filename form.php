<form action="add.php" method="post">

Item: <input type="text" name="item" required>

Borrower: <input type="text" name="borrower" required>

Due Date: <input type="date" name="due_date" required>

<input type="submit" value="Add item">

</form>

<?php 
echo "<script>console.log('Debug Objects:  ' );</script>";
?>

