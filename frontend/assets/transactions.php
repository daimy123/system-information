<?php include '../backend/includes/header.php'; ?>

<h2>Transactions</h2>

<form method="POST" action="../backend/transactions/add_transaction.php">
    <select name="account_id" required>
        <option value="">Select Account</option>
        <?php
        include '../backend/config/database.php';
        $result = $conn->query("SELECT id FROM accounts");
        while ($row = $result->fetch_assoc()) {
            echo "<option value='".$row['id']."'>Account ID: ".$row['id']."</option>";
        }
        ?>
    </select>
    <input type="number" name="amount" placeholder="Amount" required>
    <select name="transaction_type" required>
        <option value="credit">Credit</option>
        <option value="debit">Debit</option>
    </select>
    <button type="submit">Add Transaction</button>
</form>

<h3>All Transactions</h3>
<?php include '../backend/transactions/view_transactions.php'; ?>

<?php include '../backend/includes/footer.php'; ?>
