<?php
session_start();
/* User login process, checks if user exists and password is correct */
require_once('../data/services/pdo.php');

function shaCheck($pass,$salt,$hash){
    if(hash(sha256,$pass . $salt) == $hash){
        return true;
    }
    else{
    return false;
    }
}

$email = $_POST['email'];

try {

 $stmt1 = $pdo->prepare('SELECT * FROM users WHERE email = :email');
 $stmt1->bindValue(':email', $email);
 $stmt1->execute();

if ( $stmt1->rowCount() == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
header("location: error.php");
    exit();
}
else { // User exists
    $user = $stmt1->fetch(PDO::FETCH_ASSOC);

    if ( password_verify($_POST['password'], $user['password']) && shaCheck($_POST['password'], $user['salt'], $user['password_sha256']) ) {
        
        $_SESSION['picture'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['firstname'];
        $_SESSION['last_name'] = $user['lastname'];
        $_SESSION['active'] = $user['active'];
        $_SESSION['city'] = $user['city'];
        $_SESSION['country'] = $user['country'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

header("location: index.php");
exit();
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
header("location: error.php");
        exit();
    }
}
}
catch (PDOException $e) {
 die( $e->getMessage() );
}


?>