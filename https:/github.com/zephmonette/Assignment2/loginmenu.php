 <?php
 if($_SESSION['logged_in'] == true){
  echo '<a href="portfolio.php">Portfolio</a>';
            echo '<a href="favourites.php">Favorites</a>';
            echo '<a href="profile.php">Profile</a>';
            echo '<a href="logout.php">Logout</a>';
            
            }
            

?>