<?php include '../backend/includes/header.php'; ?>

<h2>Customers</h2>

<form method="POST" action="../backend/customers/add_customer.php">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="phone" placeholder="Phone" required>
    <button type="submit">Add Customer</button>
</form>

<h3>All Customers</h3>
<?php include '../backend/customers/view_customers.php'; ?>

<?php include '../backend/includes/footer.php'; ?>
