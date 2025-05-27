<?php
session_start();
include("db.php");
// Assume the user is logged in and their data is stored in a session or fetched from the database.
$cname= "Company Name"; // Replace with dynamic data as needed
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Dashboard - Green Grow Gateway</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            background-color: #2d3e50;
            color: white;
            padding-top: 20px;
            position: fixed;
            width: 250px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }
        .sidebar h3 {
            font-weight: 500;
            color: #e1eaf4;
        }
        .sidebar a {
            color: #c5d1e1;
            text-decoration: none;
            display: block;
            padding: 15px;
            font-size: 16px;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background-color: #1f2a38;
            border-radius: 5px;
            color: #ffffff;
        }
        .navbar {
            background-color: #2d3e50;
            color: white;
        }
        .content {
            margin-left: 270px;
            padding: 20px;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
            transition: 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        .card-title {
            color: #2d3e50;
            font-weight: 700;
        }
        .table th {
            background-color: #2d3e50;
            color: white;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f0f4f8;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fas fa-leaf"> GGG</i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="companyprof.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
        <h3 class="text-center">Welcome, <?php echo $cname; ?></h3>
        <a href="company_profile.php"><i class="fas fa-user"></i> Profile</a>
        <a href="company_products.php"><i class="fas fa-seedling"></i> Products</a>
        <a href="company_orders.php"><i class="fas fa-shopping-cart"></i> Orders</a>
        <a href="company_analytics.php"><i class="fas fa-chart-line"></i> Analytics</a>
        <a href="company_settings.php"><i class="fas fa-cog"></i> Settings</a>
    </div>

    <!-- Content Area -->
    <div class="content">
        <div class="container-fluid">
            <h1 class="text-secondary">Company Dashboard</h1>
            <p>Welcome to your dashboard! Here you can manage your profile, view and manage products, track orders, view analytics, and configure settings.</p>

            <!-- Overview Cards -->
            <div class="row">
                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Total Products</h5>
                            <p class="card-text">50</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Total Orders</h5>
                            <p class="card-text">120</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Revenue</h5>
                            <p class="card-text">$15,000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">New Customers</h5>
                            <p class="card-text">30</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Management Table -->
            <div class="mt-4">
                <h2>Product Overview</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Organic Fertilizer</td>
                            <td>Fertilizers</td>
                            <td>$50</td>
                            <td>120</td>
                            <td><a href="#" class="btn btn-sm btn-primary">Edit</a> <a href="#" class="btn btn-sm btn-danger">Delete</a></td>
                        </tr>
                        <tr>
                            <td>Hydroponic Kit</td>
                            <td>Tools</td>
                            <td>$200</td>
                            <td>50</td>
                            <td><a href="#" class="btn btn-sm btn-primary">Edit</a> <a href="#" class="btn btn-sm btn-danger">Delete</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>