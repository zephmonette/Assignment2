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

</head>
<script src="../js/nav.js"></script>
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
    
    <div id="companyForm">
        <form action="portfolio.php" method="get">
            <label> How many stocks:</label>
            <input type="text" name="<?php echo $symbol ?>"><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>