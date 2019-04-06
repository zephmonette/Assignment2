<?php
    session_start();
    
    if(isset($_GET['symbol'])){
        $symbol= $_GET['symbol'];
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/list.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet' href='css/nav.css'>
        <link rel="stylesheet" href="css/index.css">
        <script src="/https:/github.com/zephmonette/Assignment2/js/list.js"></script>
         <title>Single Company</title>
         <meta charset="UTF-8"> 
    </head>
    <script src="../js/nav.js"></script>
    <script src="../js/edit.js"></script>
    <body>
        
        <div class="topnav">
        <a href="index.php" class="active">Logo</a>
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
            <?php
            
            require ('services/comp.php');
                $compData= array();
                $compData= getData($symbol);
                $values= $compData[0];
                $arr= array();
                forEach($values as $i){
                    $arr[]= $i;
                }
            echo '<h1>'.$arr[3]. '</h1>';
            
            ?>
        </div>
        
        <div id= 'compinfo'>
            <?php
                
                if(!empty($_POST['website'])){
                    changeData($symbol, 'website', $_POST['website']);
                }
                
                if(!empty($_POST['sector'])){
                    changeData($symbol, 'sector', $_POST['sector']);
                }
                
                
                if(!empty($_POST['sub'])){
                     changeData($symbol, 'subindustry', $_POST['sub']);
                }
                
                
                if(!empty($_POST['exchange'])){
                     changeData($symbol, 'exchange', $_POST['exchange']);
                }
                
                
                if(!empty($_POST['address'])){
                     changeData($symbol, 'address', $_POST['address']);
                }
                
                
                echo '<div id= "info">';
                echo "<p>NOTE: Please reload page to see changes.<p>";
                echo "<img src= '/https:/github.com/zephmonette/Assignment2/logos/". $symbol. ".svg' alt= 'logo' id= 'comlogo'>";
                echo '<div>'.$arr[1]. '</div>';
                echo '<div id= "sub">';
                echo '<div><a href="'.$arr[12]. '">'.$arr[12].'</a></div>';
                echo '<div>Sector: ' . $arr[5]. '</div>';
                echo '<div>Sub Industry: '. $arr[7]. '</div>';
                echo '<div>Exchange: '. $arr[10]. '</div>';
                echo '<div>Address: '. $arr[9]. '</div>';
                
                echo '</div></div>';
            ?>
            
            <div id= "change">
                <form method="post" id= 'mod'>
                    Website: <br>
                    <input type="text" name="website"><br>
                    Sector: <br>
                    <input type="text" name="sector"><br>
                    Sub Industry: <br>
                    <input type="text" name="sub"><br>
                    Exchange: <br>
                    <input type="text" name="exchange"><br>
                    Address: <br>
                    <input type="text" name="address"><br>
                    <input type="submit" value="save">
                    <input type="button" value="cancel" id='cancel'>
                </form>
                
            </div>
            
            <button type="button" id='edit'>Edit</button>
            <?php
            $link= "addfav.php?symbol=". $_GET['symbol'];
            echo '<button type="button" id="fav"><a href= "'.$link. '">Favorite</a></button>';
            $link= "month.php?symbol=". $_GET['symbol'];
            echo '<button type="button" id="stock"><a href= "'.$link. '">Stock Data</a></button>';
            ?>
            
        </div>
        
        
        
    </body>
</html>