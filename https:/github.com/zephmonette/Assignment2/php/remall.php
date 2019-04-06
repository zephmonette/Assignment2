<?php

session_start();
    
    $symbol= ($_GET['symbol']);
    foreach($_SESSION['favorites'] as $sym){
        if($sym == $symbol){
            unset($_SESSION['favorites']);
        }
    }
    header("Location: favourites.php")


?>