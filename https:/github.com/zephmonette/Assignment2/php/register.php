<?php
session_start();
require_once('../data/services/pdo.php');
$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['last_name'] = $_POST['lastname'];


$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$city = $_POST['city'];
$country = $_POST['country'];
$email = $_POST['email'];

//Hashing and salting and all that good stuff now works for both bubblefish and sha256 but teachers still uses $2a$12$ function which is old.
$password = password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 12,]);
$salt = base64_encode(mcrypt_create_iv(24, MCRYPT_DEV_URANDOM));
$sha = hash(sha256, $_POST['password'] . $salt);

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
     $oldid = $pdo->query('SELECT MAX(id) FROM users');
     $id = $oldid->fetch();
     
     $newid = $id[0];
     $newid++;
     
     $stmt2 = $pdo->prepare("INSERT INTO users (id, firstname, lastname, city, country, email, password, salt, password_sha256) " . "VALUES (:id, :first_name,:last_name,:city, :country, :email,:password, :salt, :sha)");
     
     $stmt2->bindValue(':id', $newid);
     $stmt2->bindValue(':first_name', $first_name);
     $stmt2->bindValue(':last_name', $last_name);
     $stmt2->bindValue(':city', $city);
     $stmt2->bindValue(':country', $country);
     $stmt2->bindValue(':email', $email);
     $stmt2->bindValue(':password', $password);
     $stmt2->bindValue(':salt', $salt);
     $stmt2->bindValue(':sha', $sha);
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