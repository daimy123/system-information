<?php
include '../config/database.php';

$sql = "SELECT accounts.id, customers.name, accounts.account_type, accounts.balance FROM accounts
        JOIN customers ON accounts.customer_id = customers.id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Customer Name</th><th>Account Type</th><th>Balance</th><th>Actions</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["name"]."</td>
                <td>".$row["account_type"]."</td>
                <td>".$row["balance"]."</td>
                <td>
                    <a href='edit_account.php?id=".$row["id"]."'>Edit</a> | 
                    <a href='delete_account.php?id=".$row["id"]."'>Delete</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No accounts found.";
}

$conn->close();
?>
