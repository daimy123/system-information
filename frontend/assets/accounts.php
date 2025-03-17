<?php include '../backend/includes/header.php'; ?>

<h2>Accounts</h2>

<form method="POST" action="../backend/accounts/add_account.php">
    <select name="customer_id" required>
        <option value="">Select Customer</option>
        <?php
        include '../backend/config/database.php';
        $result = $conn->query("SELECT id, name FROM customers");
        while ($row = $result->fetch_assoc()) {
            echo "<option value='".$row['id']."'>".$row['name']."</option>";
        }
        ?>
    </select>
    <select name="account_type" required>
        <option value="savings">Savings</option>
        <option value="current">Current</option>
    </select>
    <input type="number" name="balance" placeholder="Balance" required>
    <button type="submit">Add Account</button>
</form>

<h3>All Accounts</h3>
<?php include '../backend/accounts/view_accounts.php'; ?>

<?php include '../backend/includes/footer.php'; ?>
