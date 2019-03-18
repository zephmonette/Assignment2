<?php require_once('db.php'); ?>
<!DOCTYPE html>
<html>
<body>
<h1>Database Tester (PDO)</h1>
<?php
try {
 $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql = "select * companies";
 $result = $pdo->query($sql);
 while ($row = $result->fetch()) {
 echo $row['symbol'] . " - " . $row['name'] . "<br/>";
 }
 $pdo = null;
}
catch (PDOException $e) {
 die( $e->getMessage() );
}
?>
</body>
</html>