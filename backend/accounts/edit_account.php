<?php
include '../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $account_type = $_POST['account_type'];
    $balance = $_POST['balance'];

    $sql = "UPDATE accounts SET account_type='$account_type', balance='$balance' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Account updated successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
