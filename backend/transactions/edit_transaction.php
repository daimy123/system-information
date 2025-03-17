<?php
include '../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $amount = $_POST['amount'];
    $transaction_type = $_POST['transaction_type'];

    // Fetch existing transaction details
    $transaction = $conn->query("SELECT * FROM transactions WHERE id=$id")->fetch_assoc();
    if (!$transaction) {
        die("Transaction not found!");
    }

    $account_id = $transaction['account_id'];
    $old_amount = $transaction['amount'];
    $old_type = $transaction['transaction_type'];

    // Reverse old transaction
    if ($old_type == 'debit') {
        $conn->query("UPDATE accounts SET balance = balance + $old_amount WHERE id=$account_id");
    } else {
        $conn->query("UPDATE accounts SET balance = balance - $old_amount WHERE id=$account_id");
    }

    // Apply new transaction
    if ($transaction_type == 'debit') {
        $balance_check = $conn->query("SELECT balance FROM accounts WHERE id=$account_id")->fetch_assoc();
        if ($balance_check['balance'] < $amount) {
            die("Insufficient balance!");
        }
        $conn->query("UPDATE accounts SET balance = balance - $amount WHERE id=$account_id");
    } else {
        $conn->query("UPDATE accounts SET balance = balance + $amount WHERE id=$account_id");
    }

    // Update transaction record
    $sql = "UPDATE transactions SET amount='$amount', transaction_type='$transaction_type' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Transaction updated successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
