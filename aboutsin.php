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

    body html {
       height: 100%;
       font-family: Arial, sans-serif;
       overflow: hidden;
       }
        body {
            
            
            height: 66vh;
             background-image: url('index.jpg'); 
             margin: 0;


             background-position: center;
             background-repeat: no-repeat;
             background-size:cover; 
             
             
        }
 
       
        @media only screen and (max-width: 768px) {
            body {
               
                background-image: url('indeximage/aboutbg.jpg');
                background-size: cover; 
                background-position: center;
                background-repeat: no-repeat;
              
            }
        }
        
       
        @media only screen and (max-width: 480px) {
            body {
               
                background-image: url('indeximage/aboutbg.jpg'); 
                background-size: cover; 
                background-position: center;
                background-repeat: no-repeat;
               
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
            margin-top: 310px;
        }

        .hero-section h1 {
            font-size: 2.5rem;
            font: san-francisco;
            color:  000800;
            margin-bottom: 50px;

        }
        .hero-section h2 {
           
            color:  00800;
            margin-bottom: 310px;

        }
        
        .job-roles {
           margin-bottom: 500px;
           margin-top: 20px;
           display: grid;
           grid-template-columns: repeat(4, 1fr); 
           gap: 90px; 
           opacity: 0;
           animation: fadeIn 1s forwards;
      }
      
      @keyframes fadeIn {
          to {
              opacity: 1;
          }
      }
      
      .job-role {
          display: flex;
          flex-direction: column;
          align-items: center;
          text-align: center;
          margin: 2rem 2rem;
          margin-top: 5rem;
          font-weight: bold;
          transition: transform 0.3s, box-shadow 0.3s;
      }
      
      .job-role:hover {
          transform: translateY(-10px);
          box-shadow: 0 4px 20px rgba(0, 0, 0, 0.0);
      }
      
      .job-role-image {
          width: 200px; 
          height: 200px; 
          border-radius: 50%;
          object-fit: cover;
          margin-bottom: 10px;
      }
      
      .job-role h4 {
          font-size: 1.2em;
          margin-bottom: 5px;
      }
      
      .job-role h2 {
          font-size: 1.2em;   
      }
      
      .job-role p {
          margin: 0;
          font-size: 1em;
      }
      
      /* Mobile Responsive Styles */
      @media (max-width: 768px) {
          .job-roles {
              grid-template-columns: repeat(2, 1fr); 
              gap: 40px;
          }
      }
      
      @media (max-width: 480px) {
          .job-roles {
              grid-template-columns: 1fr; 
              gap: 20px;
          }
      
          .job-role {
              margin: 1rem;
          }
      
          .job-role h4, .job-role h2 {
              font-size: 1em;
          }
      
          .job-role p {
              font-size: 0.9em;
          }
      }
      
       .caption {
           position: absolute;
           border-radius: 10px;
           top: 0;
           left: 0;
           right: 0;
           bottom: 0;
           display: flex;
           align-items: center;
           justify-content: center;
           flex-direction: column;
           color: #fff;
           cursor: pointer;
           opacity: 0;
           padding:30px; 
           transition:  0.4s;
           box-sizing: border-box; 
       }
       
       
       
       
       .first-about {
              margin: 30rem 6rem;
              display: flex;
              align-items: center;
              justify-content: space-between;
              margin-top: 5rem;
              font-weight: bold;

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
<body bgcolor="#06402b">


   
    <div class="hero-section"> 
    <h1>ආයුබෝවන්!</h1>
    <h2>ඔබව අපගේ වෙබපිටුව වෙත සාධරයෙන් පිලිගන්නවා</h2>
       

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



    
    <div class="job-roles">
        
        <div class="job-role">
            <img src="cmlogo.png" alt="Company Logo" class="job-role-image">
            <h2>Admin</h2>
            <p>"Admin has full authority to manage lectures, batches, and student profiles, ensuring that the project management is up-to-date and well-organized"</p>
        </div>
        <div class="job-role">
            <img src="indeximage/lecturerole.jpg" alt="Supervisor Image" class="job-role-image">
            <h2>Supervisor/Course Director</h2>
            <p>"Supervisor can oversee multiple teams, provide feedback on submissions, make announcements, maintain login sheets, and allocate marks to team members"</p>
        </div>
        <div class="job-role">
            <img src="indeximage/teamrole.jpg" alt="Team Leader Image" class="job-role-image">
            <h2>Team Leader</h2>
            <p>"Team Leader, a sub-role of students, can create teams, select supervisors, submit project work, and request appointments with their supervisors"</p>
        </div>
        <div class="job-role">
            <img src="indeximage/studentrole.jpg" alt="student Image" class="job-role-image">
            <h2>Student</h2>
            <p>"Students can log in to the system to connect with their project work, and interact with the team leader and supervisor as needed"</p>
        </div>

    </div>
    

    
    <div class='footer'>
            <div class='top'>
                <div>
                    <h1>GREEN GROW GATEWAY</h1>
                    <p>Innovating the Future, Together.</p>
                </div>
                <div class='social-icons'>
                    <a href="/" aria-label="Facebook">
                        <i class='fab fa-facebook-square'></i>
                    </a>
                    <a href="/" aria-label="Instagram">
                        <i class='fab fa-instagram-square'></i>
                    </a>
                    <a href="http://Wa.me/+94776902562" aria-label="WhatsApp">
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
                    <a href="/">GitHub</a>
                    <a href="/">Issues</a>
                    <a href="/">Projects</a>
                    <a href="/">Twitter</a>
                </div>
                <div>
                    <h4>Help</h4>
                    <a href="/">Support</a>
                    <a href="/">Troubleshooting</a>
                    <a href="/">Contact Us</a>
                </div>
                <div>
                    <h4>Others</h4>
                    <a href="/">Terms of Service</a>
                    <a href="/">Privacy Policy</a>
                    <a href="/">License</a>
                </div>
                <div>
                    <p>Nibm Galle</p>
                    <p>Mathara road, Galle</p>
                    <p>Phone: +94 11 2356456</p>
                    <p>Fax: +94 11 2445279</p>
                    <p>Email: unibm@gmail.com</p>
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
