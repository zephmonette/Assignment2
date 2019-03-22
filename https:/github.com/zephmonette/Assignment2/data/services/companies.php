<?php require_once('db.php'); ?>


<?php
try {
 $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
 $sql = "SELECT * FROM companies ";
 $result = $pdo->query($sql);
 
 
 $dbData= array();
 
 while($row = $result->fetch()){
  $dbData[]= $row;
 }
 
echo json_encode($dbData);
 
}
catch (PDOException $e) {
 die( $e->getMessage() );
}
?>
