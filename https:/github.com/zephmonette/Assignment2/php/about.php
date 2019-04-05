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
        <h1>About</h1>
    </div>
    
    <div class= "links">
        <h2>Zephaniah Monette:  <a href= "https://github.com/zephmonette">Link to my Github</a></h2>
        <h2>Tristen Meilleur: <a href='https://github.com/tmeil781'>Link to my Github</a></h2>
        <h2>Bryce Baker: <a href= "github go here">Link to my Github</a></h1>
        <h2>Paulina Wynter: <a href= "https://github.com/paulinawynter">Link to my Github</a></h1>
        <h2> <a href= "https://github.com/zephmonette/Assignment2">Link to our Github Repository</a></h2>
    </div>
    
    
</body>

<footer>
    <div id= 'footy'>About Our Site:</div>
    <p>Comp 3512</p>
    <p>Mount Royal University</p>
    <p>Randy Connelly</p>
    <p>Winter 2019 Semester</p>
</footer>

</html>