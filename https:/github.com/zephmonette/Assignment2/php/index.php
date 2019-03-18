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
            <a href="#Home">Home</a>
            <a href="#About">About</a>
            <a href="#Companies">Companies</a>
            <a href="#Portfolio">Portfolio</a>
            <a href="#Profile">Profile</a>
            <a href="#Favourites">Favourites</a>
            <a href="#login">Login</a>
            <a href="#Logout">Logout</a>
            <a href="#Sign Up">Sign Up</a>
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

    <div>
        <h1>About</h1>
    </div>

    <div class="links">
        <h2>Zephaniah Monette:  <a href= "https://github.com/zephmonette">Link to my Github</a></h2>
        <h2>Tristen Meilleur: <a href='https://github.com/tmeil781'>Link to my Github</a></h2>
        <h2>Bryce Baker: <a href= "github go here">Link to my Github</a></h1>
        <h2>Paulina Wynter: <a href= "https://github.com/paulinawynter">Link to my Github</a></h1>
        <h2> <a href= "https://github.com/zephmonette/Assignment2">Link to our Github Repository</a></h2>
    </div>

</body>

</html>