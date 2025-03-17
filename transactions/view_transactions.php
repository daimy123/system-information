<?php
include '../config/database.php';

$sql = "SELECT transactions.id, customers.name, accounts.account_type, transactions.amount, transactions.transaction_type 
        FROM transactions
        JOIN accounts ON transactions.account_id = accounts.id
        JOIN customers ON accounts.customer_id = customers.id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Customer Name</th><th>Account Type</th><th>Amount</th><th>Type</th><th>Actions</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["name"]."</td>
                <td>".$row["account_type"]."</td>
                <td>".$row["amount"]."</td>
                <td>".$row["transaction_type"]."</td>
                <td>
                    <a href='../frontend/edit_transaction.php?id=".$row["id"]."'>Edit</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No transactions found.";
}

$conn->close();
?>
