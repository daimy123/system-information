<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Ebenezer Kuries</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.html">Ebenezer Kuries</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="customers.html">Customers</a></li>
                    <li class="nav-item"><a class="nav-link" href="accounts.html">Accounts</a></li>
                    <li class="nav-item"><a class="nav-link" href="transactions.html">Transactions</a></li>
                    <li class="nav-item"><a class="nav-link active" href="about.html">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5 main-content">
        <h1 class="text-center text-primary">About Ebenezer Kuries</h1>
        
        <div class="row mt-4">
            <div class="col-md-6">
                <img src="/ebenezer-kuries/frontend/images/company1.jpg" class="img-fluid rounded shadow" alt="Company Image 1">
            </div>
            <div class="col-md-6">
                <img src="/ebenezer-kuries/frontend/images/company2.jpg" class="img-fluid rounded shadow" alt="Company Image 2">
            </div>
        </div>

        <div class="mt-4 p-4 bg-light rounded shadow">
            <h3>Who We Are</h3>
            <p>
                Ebenezer Kuries is a trusted financial organization providing secure and reliable 
                chitty (kuri) services in India. We have been helping individuals and businesses 
                achieve their financial goals for over a decade. Our strong foundation is built 
                on transparency, trust, and customer satisfaction.
            </p>
            <h3>Our Mission</h3>
            <p>
                Our mission is to provide a safe and well-structured financial system that benefits 
                our customers. We aim to simplify financial management while ensuring security 
                and efficiency in every transaction.
            </p>
            <h3>Why Choose Us?</h3>
            <ul>
                <li>Reliable and legally compliant financial services</li>
                <li>Secure and transparent transactions</li>
                <li>Dedicated customer support</li>
                <li>Flexible and customized financial solutions</li>
            </ul>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer bg-dark text-white text-center py-3">
        &copy; <span id="year"></span> Ebenezer Kuries. All rights reserved.
    </footer>

    <script>
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
