<?php
session_start();
$user_name = "Company Name"; // Replace with dynamic data as needed
$contact_email = "contact@company.com"; // Replace with dynamic data as needed
$address = "1234 Farm Lane, Green City"; // Replace with dynamic data as needed
$profile_pic = "default.jpg"; // Replace with a default image path

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Capture form data
    $user_name = $_POST['user_name'];
    $contact_email = $_POST['contact_email'];
    $address = $_POST['address'];

    // Handle profile picture upload
    if (isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] === UPLOAD_ERR_OK) {
        $file_tmp = $_FILES['profile_pic']['tmp_name'];
        $file_name = basename($_FILES['profile_pic']['name']);
        $target_dir = "uploads/";
        
        // Ensure uploads directory exists
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        
        $target_file = $target_dir . $file_name;
        move_uploaded_file($file_tmp, $target_file);
        
        $profile_pic = $target_file;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Company Profile - Green Grow Gateway</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Include sidebar, navbar, and content styles from previous code */
    </style>
</head>
<body>
    <?php include('sidebar_nav.php'); ?>
    
    <div class="content">
        <h1>Company Profile</h1>
        <p>View and update your company details here.</p>
        
        <!-- Display Profile Picture -->
        <div class="mb-3">
            <img src="<?php echo $profile_pic; ?>" alt="Profile Picture" style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%;">
        </div>
        
        <!-- Profile Details Form -->
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Company Name</label>
                <input type="text" class="form-control" name="user_name" value="<?php echo htmlspecialchars($user_name); ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Contact Email</label>
                <input type="email" class="form-control" name="contact_email" value="<?php echo htmlspecialchars($contact_email); ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Address</label>
                <textarea class="form-control" name="address"><?php echo htmlspecialchars($address); ?></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Profile Picture</label>
                <input type="file" class="form-control" name="profile_pic">
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
</body>
</html>