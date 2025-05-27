<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GREEN GROW GATEWAY</title>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;700&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>
        /* Basic reset */
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
            width: 85%;
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
            color: #ffffff;
            text-decoration: none;
            font-weight: 500;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            font-size: 18px;
            transition: background 0.3s;
        }

        .nav-links:hover {
            color: #ffffff;
            background-color: #008000;
            border-radius: 4px;
        }

        .nav-links i {
            margin-right: 8px;
            color: gray;
            transition: color 0.3s;
        }

        .nav-links:hover i {
            color: #fff;
        } 
        
        .hamburger {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
        }

        .hamburger i {
            color: #000;
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
        /* Search Bar */
        .search-bar {
            display: flex;
            align-items: center;
            border: 1px solid #ddd;
            border-radius: 25px;
            padding: 10px 15px;
            width: 300px;
            background-color: #f9f9f9;
            transition: box-shadow 0.3s ease;
        }
        .search-bar:hover {
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);
        }
        .search-bar i {
            color: #888;
            margin-right: 10px;
            font-size: 1.2em;
        }
        .search-bar input {
            border: none;
            outline: none;
            background: transparent;
            font-size: 16px;
            width: 100%;
        }
        .search-bar input::placeholder {
            color: #aaa;
        }

        /* Side Menu */
        .side-menu {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100%;
            background-color: #ffffff;
            border-radius: 0 10px 10px 0;
            box-shadow: 5px 0 15px rgba(0, 0, 0, 0.3);
            padding: 20px;
            transform: translateX(-100%);
            transition: transform 0.3s ease;
            z-index: 1001;
        }
        .side-menu.active {
            transform: translateX(0);
        }
        .side-menu ul {
            list-style: none;
            padding: 0;
        }
        .side-menu li {
            margin: 20px 0;
        }
        .side-menu .nav-links {
            color: #333;
            text-decoration: none;
            font-weight: 500;
            font-size: 18px;
            display: flex;
            align-items: center;
        }
        .side-menu .nav-links i {
            margin-right: 10px;
        }

        /* Hamburger Icon */
        .hamburger {
            cursor: pointer;
            font-size: 1.5rem;
            display: flex;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .NavbarItems {
                flex-direction: column;
                align-items: flex-start;
            }
        }
        @media (max-width: 768px) {
            .side-menu {
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
    </style>

</head>
<body  bgcolor="#dcedc8">
    <!-- Navbar -->
    <nav class="NavbarItems">
        <!-- Logo -->
        <p class="navbar-logo"><i class="fa-solid fa-leaf"></i>GGG</p>
        
        <!-- Search Bar -->
        <div class="search-bar">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Search...">
        </div>

        
        <!-- Hamburger Icon -->
        <div class="hamburger" onclick="toggleSideMenu()">
            <i class="fa-solid fa-bars"></i>
        </div>
    </nav>

    <!-- Side Menu -->
    <div class="side-menu" id="sideMenu">
        <ul>
            <li><a href="index.php" class="nav-links"><i class="fa-solid fa-home"></i> Home</a></li>
            <li><a href="langsltra.php" class="nav-links"><i class="fa-solid fa-info-circle"></i> About</a></li>
            <li><a href="#" class="nav-links"><i class="fa-solid fa-leaf"></i> Services</a></li>
            <li><a href="#" class="nav-links"><i class="fa-solid fa-envelope"></i> Contact</a></li>
            <li><a href="login.php" class="nav-links"><i class="fa-solid fa-sign-in-alt"></i> Log In</a></li>
            <li><a href="question.php" class="nav-links"><i class="fa-solid fa-user-plus"></i> Sign Up</a></li>
        </ul>
    </div>

    <!-- JavaScript to toggle side menu -->
    <script>
        function toggleSideMenu() {
            document.getElementById('sideMenu').classList.toggle('active');
        }
    </script>
</body>
</html>