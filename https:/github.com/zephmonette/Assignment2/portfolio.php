<?php
session_start();

    $symbol= $_GET['itemList'];
    $number = $_GET['stockNum'];
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/list.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet' href='css/nav.css'>
        <link rel="stylesheet" href="css/index.css">
        <script src="js/list.js"></script>
         <title>List</title>
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
            <h1>Portfolio</h1>
        </div>   
    <div id="portfolio">
        <section>
            <table id="portfolioTable">
                <tr>
                    <th></th>
                    <th>Symbol</th>

                    <th>Name</th>
                    <th>$ Shares</th>
                    <th>$ Close</th>
                    <th>$ Value</th>
                </tr>
                <tbody>

                </tbody>
            </table>
            <div id="totalValue"></div>
        </section>
    </div>
    <div id="portfolioForm"><a href="portfolio.form.php">Add Stocks to Portfolio</a></div>    
</body>

</html>