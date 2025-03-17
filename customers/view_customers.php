<?php
include '../config/database.php';

$sql = "SELECT * FROM customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Actions</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["name"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["phone"]."</td>
                <td>
                    <a href='edit_customer.php?id=".$row["id"]."'>Edit</a> | 
                    <a href='delete_customer.php?id=".$row["id"]."'>Delete</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No customers found.";
}

$conn->close();
?>
