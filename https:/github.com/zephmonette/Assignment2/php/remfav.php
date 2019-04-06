<?php

session_start();
    
    $symbol= ($_GET['symbol']);
    $count= 0;
    foreach($_SESSION['favorites'] as $sym){
        
        if($sym == $symbol){
            unset($_SESSION['favorites'][$count]);
        }
        $count++;
    }
    header("Location: favourites.php")

?>