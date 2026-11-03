<?php

$conn = mysqli_connect("localhost", "root", "", "costume_closet");

if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }

$sql = "SELECT id, item, borrower, due_date, returned FROM loans

WHERE returned = 0 ORDER BY item";

$result = mysqli_query($conn, $sql);

?>

<table border="1">

  <tr>
    <th>item</th>
    <th>borrower</th>
    <th>due_date</th>
    <th>returned</th>
  </tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>

<tr>
<td><?php echo $row["item"]; ?></td>
<td><?php echo $row["borrower"]; ?></td>
<td><?php echo $row["due_date"]; ?></td>
<td><?php echo $row["returned"]; ?></td>
</tr>

<?php } ?>

</table>

<?php 

if (mysqli_num_rows($result) == 0) { echo "No loaned items found."; }

mysqli_close($conn); 
?>

