<?php
session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($password)) 
    {
        $query = "SELECT * FROM company WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            if ($user_data['password'] == $password)
             {
                header("Location:companyprof.php");
                die;
            }
        }
        echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
    } else {
        echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
    } 
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($password)) 
    {
        $query = "SELECT * FROM users WHERE cemail = '$email' LIMIT 1";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            if ($user_data['cpassword'] == $password)
             {
                header("Location:customerprof.php");
                die;
            }
        }
        echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
    } else {
        echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GREEN GROW GATEWAY</title>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;700&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <html lang="en">
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
           font-family: 'Poppins', sans-serif;
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
     
     .remember-forgot {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 12px; 
    }
    
    .remember-forgot label {
        font-size: 14.5px;
        color: black;
        margin: 15px 15px;
    }
    
    .remember-forgot label input {
        accent-color: black;
        margin-right: 40px;
    }
    
    .remember-forgot a {
      
        text-decoration:none;
        color: darkred;
    }
    
    .remember-forgot a:hover {
        color: red;
        text-decoration: underline; 
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
     
         </style>
     </head>
     <body>
         
     <div class='wrapper'>     
     <form action="#" method="POST">
     
            <h1>Login</h1>
            <div class='input-box'>
                <input type="email" placeholder='E-mail' name="email" required/>
                <FaUserAlt  class='icon'/>
            </div>
            <div class='input-box'>
                <input type="password" placeholder='Password' name="password" required/>
                <FaLock class='icon' />
           
            </div>
            <div class='remember-forgot'>
             
                <a href="forgotpassword.php"> Forgot Password ?</a>
            </div>
           
               <button type='submit' name="btnlogin">Login</button>     

        
     </form>
     <div class='remember-forgot'>
     <p>You don't have an account? <a href="question.php">Sign up here</a></p>
    </div></div>
     
     </body>
</html>
  