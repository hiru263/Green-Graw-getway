<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products - Green Grow Gateway</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Include sidebar, navbar, and content styles from previous code */
    </style>
</head>
<body>
    <?php include('sidebar_nav.php'); ?>

    <div class="content">
        <h1>Manage Products</h1>
        <p>Add, edit, and manage your products.</p>

        <!-- Product List Table -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Product rows should be populated dynamically from the database -->
                <tr>
                    <td>Organic Fertilizer</td>
                    <td>Fertilizers</td>
                    <td>$50</td>
                    <td>120</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                <!-- More rows as needed -->
            </tbody>
        </table>

        <button class="btn btn-success">Add New Product</button>
    </div>
</body>
</html>