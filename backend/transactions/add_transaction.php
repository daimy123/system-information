<?php
include '../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $account_id = $_POST['account_id'];
    $amount = $_POST['amount'];
    $transaction_type = $_POST['transaction_type'];

    if ($transaction_type == 'debit') {
        $balance_check = $conn->query("SELECT balance FROM accounts WHERE id=$account_id")->fetch_assoc();
        if ($balance_check['balance'] < $amount) {
            die("Insufficient balance!");
        }
        $sql = "UPDATE accounts SET balance = balance - $amount WHERE id=$account_id";
    } else {
        $sql = "UPDATE accounts SET balance = balance + $amount WHERE id=$account_id";
    }

    if ($conn->query($sql) === TRUE) {
        $conn->query("INSERT INTO transactions (account_id, amount, transaction_type) VALUES ('$account_id', '$amount', '$transaction_type')");
        echo "Transaction successful!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
