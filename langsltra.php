<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GREEN GROW GATEWAY</title>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;700&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <style>
    * {
       margin: 0;
       padding: 0;
       box-sizing: border-box;
     }

    body {
        background-image: url("about2.jpg");
        background-repeat: no-repeat;
        background-size:cover;
    }
    body html {
       height: 100%;
       font-family: Arial, sans-serif;
       overflow: hidden;
     }

    h1 {
       color:#000000;

       font-size: 80px;
     }

     p {
       font-size: 1.5em;
       color:white;
     }

    @media (max-width: 768px) {
    h1 {
        font-size: 2em;
    }
    p {
        font-size: 1.2em;
    }
     }

       .NavbarItems {
            
            display: flex;
            background-color: rgba(255, 255, 255, 0.7);
            justify-content: space-between;
            align-items: center;
            padding: 0 18px;
            box-shadow: 0 5px 15px 0 rgba(0, 0, 0, 0.25);
            width: 95%;
            height: 80px;
            border-radius: 13px;
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translate(-50%);
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .navbar-logo {
            font-size: 40px;
            padding: 10px;
            text-decoration: none;
            color: inherit;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        .navbar-logo i {
            font-size: 40px;
            margin-right: 10px;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
            align-items: center;
        }

        .nav-menu li {
            margin: 0 5px;
        }

        .nav-links {
            color: #000000;
            text-decoration: none;
            font-weight: 500;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            font-size: 18px;
            transition: background 0.3s;
        }

        .nav-links:hover {
            color: #fff;
            background-color: #008000;
            border-radius: 4px;
        }

        .nav-links i {
            margin-right: 8px;
            color: gray;
            transition: color 0.3s;
        }

        .nav-links:hover i {
            color: #ffffff;
        }

        .hamburger {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
        }

        .hamburger i {
            color: #000;
        }
            
      
        @media (max-width: 768px) {

        }

        @media (min-width: 769px) {
            .side-menu {
                display: none;
            }
        }
        .hero-section {
            text-align: center;
            margin-top: 270px;
        }

        .hero-section .hero-button {

            display: inline-block;
            font-weight: bold;
            margin-bottom:200px;
            background: linear-gradient(45deg, #Dffe00 0%, #000000 100%);
            color: #FFFFFF;
            padding: 10px 40px;
            border-radius: 25px;
            font-size: 1.1rem;
            text-decoration: none;
            transition: background-color 1.2s ease;
        }

        .hero-section .hero-button:hover {
            background:#001400; 
        }

               .hero-section .button {
       
                   margin-bottom: 80px; 
               }

       @media (min-width: 600px) {
           .program {
               width: 30%; 
               margin: 1%;
              
           }
           
       }
       
       @media (min-width: 900px) {
           .programs {
               padding: 100px 20px; 
               
           }
       }
                  
    </style>
</head>
<body>

        <div class="hero-section"> 
        <h1>SELECT LANGUAGE</h1><br><br><br>
           <a  href="abouteng.php" class="hero-button">English</a>           
           <a  href="aboutsin.php" class="hero-button">සිංහල</a>
           <a  href="abouttml.php" class="hero-button">தமிழ்</a>

     </div>

    <nav class="NavbarItems">
        <p class="navbar-logo"><i class="fa-solid fa-leaf"></i>GGG</p>
        <a href="index.php" class="nav-links"><i class="fa-solid fa-home"></i> Home</a>

        
</body>
</html>
