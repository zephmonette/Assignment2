<?php
    session_start();
?>
<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" type="text/css" href="css/portfolioList.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet' href='css/nav.css'>
        <link rel="stylesheet" href="css/index.css">
         <title>List</title>
         <meta charset="UTF-8"> 
    </head>
<script src="../js/nav.js"></script>
<script src="/https:/github.com/zephmonette/Assignment2/js/portfolio.js"></script>

<body>
    <div class="topnav">
        <a href="#home" class="active">Stocks N Such</a>
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
    
    <div id="companyForm">
        <form action="portfolio.php" method="get">
            <label> Select A Company: </label>
            <select name="itemList">

            </select>
            
            <label> How many stocks:</label>
            <input type="text" name="stockNum"/>
            <input type="submit" value="Submit">
        </form>
    </div>
    <div id = "IMTEMPORARYDELETEMEBEFORESUBMITTING">
        <php?
        if(isset($_COOKIE[$testCookie])) {
        echo 'test cookie set';
        }
        else{
        setcookie('testCookie', time()+3600);
        }
        ?>
    </div>
</body>
</html>