 <?php
 if($_SESSION['logged_in'] == true){
  echo '<button><a href="portfolio.php">Portfolio</a></button>';
            echo '<button><a href="favourites.php">Favorites</a></button>';
            echo '<button><a href="profile.php">Profile</a></button>';
            echo '<button><a href="logout.php">Logout</a></button>';
            
            }
            
if($_SESSION['logged_in'] == false){
 echo '<button id= "b1">Login</button>';
 echo '<button id= "b2">Sign Up</button>';
}
?>