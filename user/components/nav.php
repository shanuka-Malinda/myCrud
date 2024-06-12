<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="components\nav.css">
    <title>Navigation</title>
     <style>
        .logo{
             
            margin-left: 30px;
        }
        .nameTag h1{
            color: white;
            padding-left: 10px;
            cursor: none;
        }
        .search{
            margin-left: 50px;
        }
         .search input{
          width: 350px;
          height: 30px;
          border-bottom-left-radius: 15px;
          border-top-left-radius: 15px;
          outline: none;
          border:1px solid white;
          background: transparent;
          padding-left: 15px;
          color: white;
        }
        .search button{
            height: 30px;
            border: none;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
            cursor: pointer;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: #012345;
            font-weight: bold;
            margin-left: 3px;
            width: 40px;
            position: relative;
            top: -4px;
        }
        .search button img{
            width: 28px;
            height: 28px;
            /* background-color: red; */
            position: absolute;
            top:1px;
            left: 3px;
        }
     </style>
    <script>
        function setActiveLink(clickedLink) {
            // Remove 'active' class from all links
            var links = document.querySelectorAll('nav a');
            links.forEach(function(link) {
                link.classList.remove('active');
            });

            // Add 'active' class to the clicked link
            clickedLink.classList.add('active');
        }
    </script>                   

</head>
<body>
<nav>
         <div class="logo"><img src="assets/logo1.png" alt="LOGO" height="50px" width="50px"></div>
         <div class="nameTag"><h1>365 SEAFOOD</h1></div>
         <div class="search"><input type="search" name="search" id="search" placeholder="Search here......"><button><img src="assets/se2.png" alt=""></button></div>
        <ul>
        <li><a href="index.php" onclick="setActiveLink(this)" class="<?= isset($activePage) && $activePage === 'home' ? 'active' : '' ?>">Home</a></li>
            <li><a href="shop.php" onclick="setActiveLink(this)" class="<?= isset($activePage) && $activePage === 'shop' ? 'active' : '' ?>">Shop</a></li>
            <li><a href="aboutUs.php" onclick="setActiveLink(this)" class="<?= isset($activePage) && $activePage === 'aboutus' ? 'active' : '' ?>">About Us</a></li>
            <li><a href="signUp.php" onclick="setActiveLink(this)" class="<?= isset($activePage) && $activePage === 'register' ? 'active' : '' ?>">Sign Up</a></li>
             
            <li><a href="uProfile.php" onclick="setActiveLink(this)" class="<?= isset($activePage) && $activePage === 'uProfile' ? 'active' : '' ?>">My Account</a></li>
         </ul>
    </nav>

    <script>
        function setActiveLink(clickedLink) {
            // Remove 'active' class from all links
            var links = document.querySelectorAll('nav a');
            links.forEach(function(link) {
                link.classList.remove('active');
            });

            // Add 'active' class to the clicked link
            clickedLink.classList.add('active');
        }
    </script>
</body>
</html>