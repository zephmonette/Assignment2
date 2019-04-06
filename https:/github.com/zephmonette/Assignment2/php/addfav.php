<?php
    session_start();
    
    if(isset($_SESSION['favorites'])){
    $favoritesArray[]= $_SESSION['favorites'];
    }

    else{
        $favoritesArray;
        $_SESSION['favorites'][]= $favoritesArray;
    }
    
    $favoritesArray= ($_GET['symbol']);
    $_SESSION['favorites'][]= $favoritesArray;
    header("Location: favourites.php")
    
?>