<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Settings - Green Grow Gateway</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Include sidebar, navbar, and content styles from previous code */
    </style>
</head>
<body>
    <?php include('sidebar_nav.php'); ?>

    <div class="content">
        <h1>Settings</h1>
        <p>Configure your account and application settings here.</p>

        <!-- Settings Form -->
        <form>
            <div class="mb-3">
                <label class="form-label">Email Notifications</label>
                <select class="form-select">
                    <option value="enabled">Enabled</option>
                    <option value="disabled">Disabled</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="****">
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
</body>
</html>