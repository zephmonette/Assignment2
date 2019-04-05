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
 
 return $dbData;
}

?>
