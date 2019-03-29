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

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
    elseif (isset($_POST['register'])) { // user registering
        require 'register.php';
    }
}
?>
<script src="../js/nav.js"></script>
<script src="../js/form.js"></script>
<body>
    <div class="topnav">
        <a href="#home" class="active">Logo</a>
        <div id="links">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="companies.php">Companies</a>
            <a href="portfolio.php">Portfolio</a>
            <a href="profile.php">Profile</a>
            <a href="favourites.php">Favourites</a>
            <?php
            require('logoutnav.php')
            ?>
            

        </div>
        <a class="icon">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    
    <form action="index.php" method="post" autocomplete="off">
        <div>
            <label>
                Email Address<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email" />
        </div>

        <div>
            <label>
                Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password" />
        </div>

        <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>

        <button class="button button-block" name="login" />Log In</button>

    </form>

    <form action="index.php" method="post" autocomplete="off">

        <div>
            <div>
                <label>
                    First Name<span class="req">*</span>
                </label>
                <input type="text" required autocomplete="off" name='firstname' />
            </div>

            <div>
                <label>
                    Last Name<span class="req">*</span>
                </label>
                <input type="text" required autocomplete="off" name='lastname' />
            </div>
        </div>

        <div>
            <label>
                City<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name='city' />
        </div>
        
        <div>
            <label>
                Country<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name='country' />
        </div>

        <div>
            <label>
                Email Address<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name='email' />
        </div>

        <div>
            <label>
                Set A Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name='password' id='password'/>
        </div>
        
        <div>
            <label>
                Confirm password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name='password' id='confirm_password'/>
            <span id='message'></span>
        </div>

        <button type="submit" class="button button-block" name="register" />Register</button>

    </form>


</body>

</html>