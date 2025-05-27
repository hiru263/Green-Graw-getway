<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;700&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>
        /* CSS for profile page */
        body, html {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        .profile-container {
            max-width: 900px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        .profile-header {
            text-align: center;
        }

        .profile-header h1 {
            font-size: 2em;
            color: #333;
        }

        .profile-info {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 20px;
        }

        .profile-info img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }

        .profile-details {
            flex: 1;
            margin-left: 20px;
        }

        .profile-details h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #444;
        }

        .profile-details p {
            font-size: 1em;
            color: #666;
        }

        .profile-actions {
            margin-top: 30px;
            display: flex;
            justify-content: space-around;
        }

        .profile-actions a {
            text-decoration: none;
            color: #fff;
            background-color: #28a745;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .profile-actions a:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<?php
// Assuming session has started and user is logged in
session_start();
include("db.php");

if (isset($_SESSION['user_id'])) {
    // Fetch user data from session or database
    $username = "fathima"; // Example data; replace with actual user data
    $cemail = "shahmu06@gmail.com"; // Example data
}

?>

<div class="profile-container">
    <div class="profile-header">
        <h1>Welcome to Your Profile, <?php echo $username; ?>!</h1>
    </div>

    <div class="profile-info">
        
        <div class="profile-details">
            <h2><?php echo $username; ?></h2>
            <p>Email: <?php echo $cemail; ?></p>
        </div>
    </div>

    <div class="profile-actions">
        <a href="order-history.php">Order History</a>
        <a href="account-settings.php">Account Settings</a>
        <a href="logout.php">Log Out</a>
    </div>
</div>



</body>
</html>