<?php
session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $cemail = $_POST['cemail'];
    $cpassword = $_POST['cpassword'];

    if (!empty($cemail) && filter_var($cemail, FILTER_VALIDATE_EMAIL) && !empty($cpassword)) {
        // Use a prepared statement to prevent SQL injection
        $stmt = $con->prepare("INSERT INTO users (username, cemail, cpassword) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $cemail, $cpassword);

        if ($stmt->execute()) 
        {
            echo "<script type='text/javascript'> alert('Successfully registered')</script>";

            header("Location:customerprof.php");
            die;

            
        } else {
            echo "<script type='text/javascript'> alert('Registration failed')</script>";
        }
        
        $stmt->close();
    } else {
        echo "<script type='text/javascript'> alert('Please enter some valid information')</script>";
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
      
      .wrapper {
          max-width: 420px;
          margin: 150px auto;
          padding: 30px 40px;
          color: #ffffff;
          border-radius: 10px;
          background-color: rgba(200, 200, 200, 0.8);
          box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3), 0 15px 30px rgba(0, 0, 0, 0.2);
          font-family: Arial, sans-serif;
      }
      
      @media only screen and (max-width: 768px) {
          .wrapper {
              max-width: 80%;
              margin: 150px auto;
              padding: 20px 30px;
            
          }
      }
      
      @media only screen and (max-width: 480px) {
          .wrapper {
              max-width: 90%;
              margin: 100px auto;
            
          }
      }
      
     .wrapper h1 {
         font-size: 36px;
         text-align: center;
         margin-bottom: 20px;  
        color: black;
     }
     .wrapper h4 {
         text-align: center; 
         color: black;
     }
     
     .wrapper .input-box {
         position: relative;
         width: 100%;
         height: 50px;
         margin: 20px 0; 
         color: black;
     }
     
     .input-box input {
         width: 100%;
         height: 100%;
         background: transparent;
         border: none;
         outline: none;
         border: 2px solid black;
         border-radius: 40px;
         padding: 20px 45px 20px 20px; 
         font-size: 16px; 
         box-sizing: border-box; 
         color: black;
     }
     
     .input-box input::placeholder {
         color: black;
     }
     
     .input-box .icon {
         position: absolute;
         right: 20px;
         top: 50%;
         transform: translateY(-50%);
         font-size: 20px;
         color: black;
     }
     
     
     .wrapper button {
         width: 100%;
         height: 40px;
         margin-top: 20px;
         border-radius: 50px;
         border: none;
         outline: none;
         background: linear-gradient(45deg, #008000 0%, #1a7d08 100%);
         font-size: 19px;
         font-weight: 500;
         color: #eee;
         position: relative;
         cursor: pointer;
         z-index: 1;
         overflow: hidden;
         font-family: Arial, sans-serif;
     }
     
     .wrapper button::before{
         content: "";
         position: absolute;
         left: 0;
         top: 0%;
         height: 100%;
         width: 00%;
         background: linear-gradient(45deg, #1a7d08 0%, #000000 100%); 
         transition: .5s ease;
         z-index: -1;
     }
     
     .wrapper button:hover {
         color: #eee;
     }
     .wrapper button:hover:before{
         width: 100%;
         }
     
     .register-link {
         text-align: center;
         margin-top: 10px;
         font-size: 14.5px;
     }
     
     .register-link p {
         font-size: 14px;
         color: #ccc; 
     }
     
     .register-link a {
         color: black;
         text-decoration: none;
     }
     
     .register-link a:hover {
         text-decoration: underline;
     }
     p {
            text-align: center;
            padding-top: 20px;
            font-size: 15px;
        }
     
         </style>
     </head>
     <body>
         
     <div class="wrapper">     
     <form method="POST">
     
            <h1>SIGN UP</h1>
            <h4>It's free and only takes a minute</h4>
            <div class='input-box'>
                <input type="text" placeholder='Username' name="username" required/>
                <FaUserAlt  class='icon'/>
            </div>
           
            <div class='input-box'>
                <input type="email" placeholder='E-mail' name="cemail" required/>
                <FaUserAlt  class='icon'/>
            </div>
            
            <div class='input-box'>
                <input type="password" placeholder='Password' name="cpassword" required/>
                <FaLock class='icon' />
           
            </div>
            <button type="submit" name="btnreg">REGISTER</button>
        </form>
        <p>Already have an account? <a href="login.php">login here</a></p>
       
    </div>
</body>
</html>
            
