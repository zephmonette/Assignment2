<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/list.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet' href='css/nav.css'>
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/portfolioList.css">
        <script src="js/list.js"></script>
         <title>List</title>
         <meta charset="UTF-8"> 
    </head>
    <script src="js/nav.js"></script>
    <script src="js/portfolio.js"></script>
    <body>
        
        <div class="topnav">
        <a href="index.php" class="active">Stocks N Such</a>
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
                <tbody id="tableBody">

                </tbody>
            </table>
            <div id="totalValue"></div>
        </section>
    </div>
    
    <div id='formInfo'>
        <?php
            require ('services/comp.php');
            if(!empty($_POST['itemList']) && !empty($_POST['stockNum'])) {
                $compName = name($_POST['itemList']);
                $name = $_POST['itemList'];
                $number = $_POST['stockNum'];
                //echo addToStockList($compName, $name, $number);
            }
            
        ?>
        <div id='form'>
            <form method='post' id='add'>
                <label> Select A Company: </label>
                <select name="itemList" id="selectValue"></select>
                <label> How many stocks:</label>
                <input type="text" name="stockNum" id="inputValue"><br>
                
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
    
    <div id="stockButton">
        <button type='button' id="addStocks">Add Stocks to Portfolio</button>
    </div>
</body>

</html>