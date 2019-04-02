<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8' />
    <title>Index</title>
  <!--   <link rel='stylesheet' href='../css/index.css'> -->
    <link rel='stylesheet' href='../css/nav.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<script src="../js/nav.js"></script>

<body>
    <div class="topnav">
        <a href="#home" class="active">Logo</a>
        <div id="links">
             <button><a href="index.php">Home</a></button>
            <button><a href="about.php">About</a></button>
            <button><a href="list.php">Companies</a></button>
            <button><a href="portfolio.php">Portfolio</a></button>
            <button><a href="profile.php">Profile</a></button>
            <button><a href="favourites.php">Favourites</a></button>
            <?php
            require('logoutnav.php')
            ?>
        </div>
        <a class="icon">
            <i class="fa fa-bars"></i>
        </a>
    </div>
        
    <div>
        <h1>Profile</h1>
    </div>
    
</body>

</html>