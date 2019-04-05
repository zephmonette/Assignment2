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
    <link rel='stylesheet' href='../css/profile.css'>
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
        <h1>Profile</h1>
    </div>
    <?php
    echo '<div class="container">';
    echo '<div class="container">';
    echo '<img src="https://randomuser.me/api/portraits/women/' . $_SESSION['picture'] . '.jpg" id="profileimage"></img>';
    echo '</div>';
    echo '<div class="container">';
    echo '<p>' . $_SESSION['first_name'] . ' ' . $_SESSION['last_name'] . '</p>';
    echo '<p>' . $_SESSION['city'] . '</p>';
    echo '<p>' . $_SESSION['country'] . '</p>';
    echo '<p>' . $_SESSION['email'] . '</p>';
    echo '</div>';
    echo '</div>';
    ?>
    
    
    
</body>

</html>