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
        <a href="index.php" class="active">Logo</a>
        <div id="links">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="list.php">Companies</a>
            <?php
            require('showmenu.php');
            require('logoutnav.php');
            require('single-company.php');
            ?>
        </div>
        <a class="icon">
            <i class="fa fa-bars"></i>
        </a>
    </div>
        
    <div>
        <section>
            <h1>Monthly Stock Data</h1>
            <h3 id="chartView">View Charts</h3>
            <table id="stockTable">
                <tr>
                    <th id="date"><a href="">Date</a></th>
                    <th id="open"><a href="">Open</a></th>
                    <th id="close"><a href="">Close</a></th>
                    <th id="high"><a href="">High</a></th>
                    <th id="low"><a href="">Low</a></th>
                    <th id="volume"><a href="">Volume</a></th>
                </tr>
                <tbody id="update">
                    <?php
                        
                    
                    
                    ?>
                </tbody>
            </table>
        </section>
    </div>
    
</body>

</html>