<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DCA</title>

    <link rel="stylesheet" type="text/css" href="../assets/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/hamburgermenu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/sessionkeycheck.js"></script>
    <script src="../assets/js/data.js"></script>
    <script src="../assets/js/configuration.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get the menu toggle button and the menu container
            const menuToggle = document.getElementById('menu-toggle');
            const menuContainer = document.getElementById('menu-container');
            const contentContainer = document.getElementById('content');

            // Opens menu on default
            menuContainer.classList.add('active');
            contentContainer.classList.add('menu-open');

            // Add a click event listener to the menu toggle button
            menuToggle.addEventListener('click', function() {
                // Toggle the 'active' class on the menu container to open/close it
                menuContainer.classList.toggle('active');

                // Add/remove the 'menu-open' class to the content container to adjust the margin left
                contentContainer.classList.toggle('menu-open');
            });
        });
    </script>
</head>
<body>
<!-- Navbar -->
<nav class="navbar">
    <!-- Hamburger menu icon -->
    <button id="menu-toggle" class="menu-toggle">
        <i class="fas fa-bars"></i>
    </button>
    <!-- Logo -->
    <div class="logo-container">
        <img src="../assets/img/DCA_logo.png" alt="Logo">
    </div>
    <!-- Login button -->
    <div class="login-button">
        <span id="UserEmail"></span>
        <span class="tooltip" data-tooltip="Logout">
            <button id="login-button">
            <i class="fas fa-lock"></i>
        </button>
            <div class="tooltip-text">Logout</div>
        </span>
        <i class="fas fa-question-circle"></i>
    </div>
</nav>

<!-- Menu -->
<div id="menu-container" class="menu-container">
    <ul class="menu">
        <li><i class="fas fa-lock menuicons"></i><a href="homepage.php#Demand">Demand</a></li>
        <li><i class="fas fa-cog menuicons"></i><a href="consumption.php#Consumption">Consumption</a></li>
        <li><i class="fas fa-bug menuicons"></i><a href="#">N/A</a></li>
        <li><i class="fas fa-bug menuicons"></i><a href="#">N/A</a></li>
        <li><i class="fas fa-bug menuicons"></i><a href="#">N/A</a></li>
        <li><i class="fas fa-bug menuicons"></i><a href="#">N/A</a></li>
        <li><i class="fas fa-bug menuicons"></i><a href="#">N/A</a></li>
        <li><i class="fas fa-bug menuicons"></i><a href="#">N/A</a></li>
        <li><i class="fas fa-bug menuicons"></i><a href="#">N/A</a></li>
        <li><i class="fas fa-lock menuicons"></i><a href="configuration.php#Configuration">Configuration</a></li>
        <li><i class="fas fa-graduation-cap menuicons"></i><a href="about.php#About">About</a></li>
        <li><i class="fas fa-question-circle menuicons"></i><a href="support.php#Support">Support</a></li>
    </ul>
</div>

<!-- Content -->
<div id="content" class="content">
    <h1>Configuration</h1>
    <form>
        <div class="form-group">
            <input id="password-input" type="password" placeholder="Current Password">
        </div>
        <div class="form-group">
            <button id="delete-user-button" type="submit">Delete User</button>
        </div>
    </form>
</div>

<!-- Footer -->
<footer class="footer">
    <span>&copy; 2023 DCA</span>
</footer>
</body>
</html>
