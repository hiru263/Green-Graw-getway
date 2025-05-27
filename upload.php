<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        echo "The photo has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your photo.";
    }
}
?>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GREEN GROW GATEWAY</title>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;700&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      
      body {
          font-family: Arial, sans-serif;
          background-position: center;
          background-repeat: no-repeat;
          background-image: url('image.jpeg');
          background-size:cover;
         
      }
      
      @media only screen and (max-width: 768px) {
          body {
              background-image: url('image.jpeg');
              background-size: cover;
              background-position: center;
              background-repeat: no-repeat;
          }
      }
      
      @media only screen and (max-width: 480px) {
          body {
              background-image: url('image.jpeg');
              background-size: cover;
              background-position: center;
              background-repeat: no-repeat;
          }
      }
      </style>
     </head>
     <body>
        
    <form action="/upload.php" method="post" enctype="multipart/form-data">
    <label for="photo">Upload Photo:</label>
    <input type="file" id="photo" name="photo" accept="image/*" required>
    <button type="submit">Upload</button>
    </form>



     </body>
</html>