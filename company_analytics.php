<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Analytics - Green Grow Gateway</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Include sidebar, navbar, and content styles from previous code */
    </style>
</head>
<body>
    <?php include('sidebar_nav.php'); ?>

    <div class="content">
        <h1>Analytics Dashboard</h1>
        <p>View insights and analytics for your sales and product performance.</p>

        <!-- Example Chart Section -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Sales Overview</h5>
                        <p class="card-text">Chart or data visualization for sales.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Customer Growth</h5>
                        <p class="card-text">Chart or data visualization for customer growth.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>