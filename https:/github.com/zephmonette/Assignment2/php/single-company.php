<?php
    session_start();
    
    if(isset($_GET['symbol'])){
        $symbol= $_GET['symbol'];
        echo $symbol;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/https:/github.com/zephmonette/Assignment2/css/list.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet' href='../css/nav.css'>
        <link rel="stylesheet" href="../css/index.css">
        <script src="/https:/github.com/zephmonette/Assignment2/js/list.js"></script>
         <title>Single Company</title>
         <meta charset="UTF-8"> 
    </head>
    <script src="../js/nav.js"></script>
    <body>
        
        <div class="topnav">
        <a href="index.php" class="active">Logo</a>
        <div id="links">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="list.php">Companies</a>
            <?php
            require('showmenu.php');
            ?>
        </div>
        <a class="icon">
            <i class="fa fa-bars"></i>
        </a>
        </div>
        
        <div>
            <h1>Single Company</h1>
        </div>
        
        
        
    </body>
</html>