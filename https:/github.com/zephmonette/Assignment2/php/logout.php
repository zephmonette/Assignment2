<?php
ob_start();
session_start();
session_unset();
session_destroy();
session_write_close();
header("Location: index.php");
exit();
?>