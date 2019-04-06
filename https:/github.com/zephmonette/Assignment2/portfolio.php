<?php
session_start();

    if(isset($_GET['symbol'])){
        $symbol= $_GET['symbol'];
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8' />
    <title>Index</title>
  <!--   <link rel='stylesheet' href='../css/index.css'> -->
    <link rel='stylesheet' href='css/nav.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="css/portfolioList.css">
</head>
<script src="js/nav.js"></script>
   <script src="js/portfolio.js"></script>

<body>
    <div class="topnav">
        <a href="#home" class="active">Logo</a>
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
        
    <div id="portfolio">
        <section>
            <h1>Portfolio</h1>
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
    <div id = "selectionList">
        <ul id = "itemList">
        </ul>
    </div>

</body>

</html>