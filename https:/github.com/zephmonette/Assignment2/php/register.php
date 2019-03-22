<?php
session_start();
require_once('../data/services/pdo.php');
$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['last_name'] = $_POST['lastname'];


$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];

//I have no clue why there is a salt and sha_256 field in the users database
$password = password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 12,]);

 $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {

 $stmt1 = $pdo->prepare('SELECT * FROM users WHERE email = :email');
 $stmt1->bindValue(':email', $email);
 $stmt1->execute();
 
 //User exists then mesage error is displayed on error page 
 if($stmt1->rowCount() > 0){
     $_SESSION['message'] = 'User with this email already exists.';
header("location: error.php");
     exit();
 }
 //User doesn't exist so prepare an entry
 else{
     $stmt2 = $pdo->prepare("INSERT INTO users (firstname, lastname, email, password, salt) " . "VALUES (:first_name,:last_name,:email,:password, :salt)");
     $stmt2->bindValue(':first_name', $first_name);
     $stmt2->bindValue(':last_name', $last_name);
     $stmt2->bindValue(':email', $email);
     $stmt2->bindValue(':password', $password);
     $stmt2->bindValue(':salt', $salt);
     //create an entry


 }

     if($stmt2->execute()){
          $_SESSION['logged_in'] = true; // So we know the user has logged in
         
     }
     else {
      $_SESSION['message'] = 'Registration failed!';
        header("location: error.php");
        exit();
    }
 }
catch (PDOException $e) {
 die( $e->getMessage() );
}
?>