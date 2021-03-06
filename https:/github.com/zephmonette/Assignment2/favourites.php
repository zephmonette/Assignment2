<?php
session_start();

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
<script src="js/nav.js"></script>

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
        <h1>Favourites</h1>
    </div>
    
    <div id= "favlist">
        <?php
        require ('services/comp.php');
        
        if(!empty($_SESSION['favorites'])){
        foreach($_SESSION['favorites'] as $symbol){
            
            echo '<div id= "fav">';
            echo '<div id= "pic"><img src= "logos/'.$symbol. '.svg" id= "icon"></div>';
            echo '<a href="single-company.php?symbol='.$symbol.'" id= "me">('.$symbol. ')</a>';
            
            $name= name($symbol);
            foreach($name as $string){
                echo '<a href="single-company.php?symbol='.$symbol.'" id= "me" >'.$string[0]. '</a>';
            }
            
            echo '<button type="button" id= "rem"><a href= "remfav.php?symbol='.$symbol. '">Remove</a></button>';
            echo '</div>';
        }
        echo '<div><button type="button" id= "all"><a href= "remall.php">Remove All</button></div>';
        }
        else{
            echo "<p id= 'none'>You have no favorites.</p>";
        }
        ?>
    </div>
    
</body>

</html>