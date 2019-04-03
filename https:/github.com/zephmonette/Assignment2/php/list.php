<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/https:/github.com/zephmonette/Assignment2/css/list.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet' href='../css/nav.css'>
        <link rel="stylesheet" href="../css/index.css">
        <script src="/https:/github.com/zephmonette/Assignment2/js/list.js"></script>
         <title>List</title>
         <meta charset="UTF-8"> 
    </head>
    <script src="../js/nav.js"></script>
    <body>
        
        <div class="topnav">
        <a href="#home" class="active">Logo</a>
        <div id="links">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="list.php">Companies</a>
            <a href="portfolio.php">Portfolio</a>
            <a href="profile.php">Profile</a>
            <a href="favourites.php">Favourites</a>
            <?php
            require('logoutnav.php')
            ?>
        </div>
        <a class="icon">
            <i class="fa fa-bars"></i>
        </a>
        </div>
        
        <div>
            <h1>Companies</h1>
        </div>
        
        <!--loading gif sourced from https://media.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif-->
        <img src="/https:/github.com/zephmonette/Assignment2/data/loadgif.gif" id = "preLoad"></img>
        <div id = "logoContainer" class = "postLoad">
        </div>
        <div id = "searchBox" class = "postLoad">
            
            <input type="text" placeholder="Filter..." id="filter">
            <button id = "filterSub">Go</button> <button id = "unfilter">Reset Filter</button>
            
            </div>
            

            <ul id = "itemList" class = "postLoad">
            </ul>
                
                <div id = mouse></div>
    </body>
</html>