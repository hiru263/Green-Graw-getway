<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GREEN GROW GATEWAY</title>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;700&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>

    * {
       margin: 0;
       padding: 0;
       box-sizing: border-box;
     }

    body html {
       height: 100%;
       font-family: Arial, sans-serif;
       overflow: hidden;
     }

    .video-background {
       position: relative;
       height: 100vh;
       width: 100%;
       overflow: hidden;
     }

    #background-video {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    transform: translate(-50%, -50%);
    z-index: -1;
    object-fit: cover;
    pointer-events: none;
     }

    .content {
    position: relative;
    z-index: 1;
    color: white;
    text-align: center;
    top: 50%;
    transform: translateY(-50%);
    padding: 0 20px;
     }

    h1 {
       color:white;
       background: linear-gradient(45deg, #9ccc65 0%, #001400 100%);
       font-size: 4em;
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

     .navbar {
        border: 2px solid #000; /* Adds a black border around the navbar */
        padding: 10px;
        background-color: #f8f8f8;
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

       
        .side-menu {
            display:grid;
            position: fixed;
            top: 0px;
            right: 0;
            width: 250px;
            height: calc(100vh - 0px);
            background-color: #ffffff;
            border-radius: 0 0 13px 13px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.25);
            padding: 10px;
            z-index: 1001;
            transform: translateX(100%); 
            transition: transform 0.3s ease;
            grid-template-columns: repeat(4, auto);
   
        }

        .side-menu.active {
            display: block;
            transform: translateX(0);
        }

        .side-menu ul {
            list-style: none;
            padding: 0;
        }

        .side-menu li {
            margin: 0;
        }

        .side-menu .nav-links {
            padding: 15px;
            font-size: 16px;
            border-bottom: 1px solid #ddd;
        }

      
        @media (max-width: 768px) {
            .NavbarItems {
                height: auto;
                padding: 0 10px;
            }

            .nav-menu {
                display: none;
                width: 100%;
                flex-direction: column;
                align-items: flex-start;
            }

            .nav-menu.active {
                display: flex;
            }

            .hamburger {
                display: block;
                margin-left: auto;
            }
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

        .hero-section h2 {
            font-size: 2.5rem;
            color: #000a00;
            margin-bottom: 50px;

        }
        .hero-section h3 {
           
            color: #000a00;
            margin-bottom:50px;

        }
        .hero-section.hero-2section
        {
            margin-bottom: 10px;
        }
        
        .hero-section .hero-button {

            display: inline-block;
            font-weight: bold;
            margin-bottom:200px;
            background: linear-gradient(45deg, #9ccc65 0%, #001400 100%);
            color: #FFFFFF;
            padding: 10px 40px;
            border-radius: 25px;
            font-size: 1.1rem;
            text-decoration: none;
            transition: background-color 1.2s ease;
        }

        .hero-section .hero-button:hover {
            background: linear-gradient(45deg, #001400  0%, #001400 100%); 
        }

               .hero-section .button {
       
                   margin-bottom: 80px; 
               }
           
       
       .first-about {
              margin: 30rem 6rem;
              display: flex;
              align-items: center;
              justify-content: space-between;
              margin-top: 5rem;
              font-weight: bold;

         }

        .about-text {
            width: 45%;
            text-align: start;
            font-size: 1.1rem;
            font-family: poppins;
        }
        .about-text h2 {
            padding-bottom: 1rem;
        }
        
        .image {
            position: relative;
            width: 50%;
            display: flex;
            justify-content: space-between;
            z-index: 1;
            gap:5px;
           
        }

        .image img {
            width: calc(50% - 15px);
            height: 350px;
            object-fit: cover;
            border-radius: 6px;
            box-shadow: -1px 1px 62px -18px rgba(0,0,0, 0.19);
            transition: filter 0.3s ease, transform 0.3s ease;
        }

        .image img:hover {
            transform: scale(1.1);
        }

        .image img:nth-child(2) {
            position: absolute;
            top: -10%;
            right: 0;
        }

        @media screen and (max-width: 850px) {
            .first-about {
                display: flex;
                flex-direction: column-reverse;
                margin-top: 2.5rem;
            }
            .about-text {
                width: 100%;
            }
            .image {
                width: 100%;
                margin: 1.8rem 0;
            }
            .image img {
                height: 250px;
            }
        }
        .footer {
            padding: 2rem 1.5rem;
            background: rgb(0, 0, 0);
            color: rgb(255, 255, 255);
            margin-top: -30%;
        }

        .home-footer {
            margin-top: -33rem; 
        }

        .top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            font-family: 'Poppins', sans-serif;
        }

        .top h1 {
            font-size: 2.5rem;
            margin: 0;
        }

        .top p {
            font-size: 1rem;
            margin: 0;
            opacity: 0.8;
        }

        .social-icons a {
            color: rgb(255, 255, 255);
            font-size: 2rem;
            margin-left: 1rem;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: skyblue;
        }

        .bottom {
            margin-top: 2rem;
            text-align: start;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            font-size: 0.9rem;
            opacity: 0.6;
        }

        .bottom div {
            display: flex;
            flex-direction: column;
        }

        .bottom h4 {
            font-size: 1.3rem;
            padding: 1rem 0 0.8rem 0;
        }

        .bottom a {
            text-decoration: none;
            color: rgb(255, 255, 255);
            padding-bottom: 0.4rem;
            font-size: 1.1rem;
        }

        .bottom a:hover {
            color: skyblue;
        }

        @media screen and (max-width: 850px) {
            .footer {
                padding: 4rem 2rem;
            }

            .social-icons {
                margin: 1rem 0 0 0;
            }

            .bottom div {
                width: 50%;
            }
        }
    </style>
</head>
<body bgcolor="#dcedc8">
<div class="video-background">

        <video autoplay muted loop id="background-video">
            <source src= "Green Grow.mp4"type="video/mp4">
            Your browser does not support the video tag.
        </video>
        
        <div class="hero-section"> 
        <h1><b>GREEN GROW GATEWAY</b></h1><br><br>
        <p>Nurturing Growth, Harvesting Prosperity</p><br><br><br><br><br>

        

           <a  href="question.php" class="hero-button">English</a>           
           <a  href="sinhala.php" class="hero-button">Sinhala</a>
           <a  href="tamil.php" class="hero-button">Tamil</a>

         </div>
     </div>

    <nav class="NavbarItems">
        <p class="navbar-logo"><i class="fa-solid fa-leaf"></i>GGG</p>
        <ul class="nav-menu">
            <li><a href="index.php" class="nav-links"><i class="fa-solid fa-home"></i> Home</a></li>
            <li><a href="langsltri.php" class="nav-links"><i class="fa-solid fa-image"></i> Image</a></li>
            <li><a href="langsltrv.php" class="nav-links"><i class="fa-solid fa-video"></i>Video</a></li>
            <li><a href="langsltra.php" class="nav-links"><i class="fa-solid fa-info-circle"></i> About</a></li>


        </ul>
        <div class="hamburger" id="menuButton">
            <i class="fa-solid fa-bars"></i>
        </div>
    </nav>

    <div class="side-menu" id="sideMenu">
        <ul>
            <li><a href="index.php" class="nav-links"><i class="fa-solid fa-home"></i> Home</a></li>
            <li><a href="langsltri.php" class="nav-links"><i class="fa-solid fa-image"></i> Image</a></li>
            <li><a href="langsltrv.php" class="nav-links"><i class="fa-solid fa-video"></i>Video</a></li>
            <li><a href="langsltra.php" class="nav-links"><i class="fa-solid fa-info-circle"></i> About</a></li>
        </ul>
    </div>

    <?php
    $about3 = 'image.jpeg'; 
    $about4 = 'image.jpeg'; 
    ?>
    
    <div class='first-about'>
        <div class='about-text'>
            <h2>About Us </h2>
            <p>"Discover UNIBM, where innovation meets opportunity. Our campus buzzes with energy and creativity, offering a rich blend of academic programs and extracurricular activities. Whether you're exploring cutting-edge research or participating in community-driven initiatives, you'll find a supportive environment that encourages growth and exploration. Join us in shaping the future through education that prepares you for success in a rapidly evolving world."</p>
        </div>
        <div class='image'>
            <img src="<?php echo $about3; ?>" alt="image" />
            <img src="<?php echo $about4; ?>" alt="image1" />
        </div>
    </div>
    
    <div class='footer'>
            <div class='top'>
                <div>
                    <h1>GREEN GROW GATEWAY</h1>
                    <p>Nurturing Growth, Harvesting Prosperity</p>
                </div>
                <div class='social-icons'>
                    <a href="/https://www.facebook.com/profile.php" aria-label="Facebook">
                        <i class='fab fa-facebook-square'></i>
                    </a>
                    <a href="/" aria-label="Instagram">
                        <i class='fab fa-instagram-square'></i>
                    </a>
                    <a href="http://Wa.me/+94728289206" aria-label="WhatsApp">
                        <i class='fab fa-whatsapp-square'></i>
                    </a>
                    <a href="/" aria-label="Twitter">
                        <i class='fab fa-twitter-square'></i>
                    </a>
                </div>
            </div>
    
            <div class='bottom'>
                <div>
                    <h4>Community</h4>
                    <a href="https://github.com/">GitHub</a>
                    <a href="/">Issues</a>
                    <a href="/">Projects</a>
                    <a href="/">Twitter</a>
                </div>
                <div>
                    <h4>Help</h4>
                    <a href="contact.php">Support</a>
                    <a href="/">Troubleshooting</a>
                    <a href="/">Contact Us</a>
                </div>
                <div>
                    <h4>Others</h4>
                    <a href="contact.php">Terms of Service</a>
                    <a href="/">Privacy Policy</a>
                    <a href="/">License</a>
                </div>
                <div>
                    <p>Nibm Galle</p>
                    <p>Mathara road, Galle</p>
                    <p>Phone: +94 776902562</p>
                    <p>Fax: +94 11 2445279</p>
                    <p>Email:greengrowgateway@gmail.com</p>
                </div>
            </div>
        </div>
    
    

    <script>
    function toggleMenu() {
        const sideMenu = document.getElementById('sideMenu');
        sideMenu.classList.toggle('active');
    }

    function closeMenu(event) {
        const sideMenu = document.getElementById('sideMenu');
        const menuButton = document.getElementById('menuButton');
        
        
        if (!sideMenu.contains(event.target) && !menuButton.contains(event.target)) {
            sideMenu.classList.remove('active');
        }
    }

   
    document.getElementById('menuButton').addEventListener('click', toggleMenu);

    
    document.addEventListener('click', closeMenu);

   
    window.addEventListener('resize', function() {
        const sideMenu = document.getElementById('sideMenu');
        if (window.innerWidth >= 769) {
            sideMenu.classList.remove('active');
        }
    });
</script>

</body>
</html>
