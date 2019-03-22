<?php
session_start();
/* User login process, checks if user exists and password is correct */
require_once('../data/services/pdo.php');

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

    if ( password_verify($_POST['password'], $user['password']) ) {
        
        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['active'] = $user['active'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

header("location: profile.php");
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