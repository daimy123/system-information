<?php
include '../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_id = $_POST['customer_id'];
    $account_type = $_POST['account_type'];
    $balance = $_POST['balance'];

    $sql = "INSERT INTO accounts (customer_id, account_type, balance) VALUES ('$customer_id', '$account_type', '$balance')";

    if ($conn->query($sql) === TRUE) {
        echo "Account added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
