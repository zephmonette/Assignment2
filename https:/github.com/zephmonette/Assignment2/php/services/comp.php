<?php require_once('db.php'); ?>


<?php

function getData($symbol){
 
  $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
 $sql = "SELECT * FROM companies where symbol= '". $symbol. "'";
 $result = $pdo->query($sql);
 
 
 $dbData= array();
 
 while($row = $result->fetch()){
  $dbData[]= $row;
 }
 
 $pdo= null;
 
 return $dbData;
}

function changeData($symbol, $thing, $change){
    
$pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
 $sql = "UPDATE companies SET ". $thing."= '". $change. "' WHERE symbol= '". $symbol. "'";
 $pdo->query($sql);
 
 $pdo= null;
    
}

?>
