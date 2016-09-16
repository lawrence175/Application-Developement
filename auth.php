<?php
/*
lawrence kisembo && tryphean
*/
?>

<!-- description of secure authentication class  -->
<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
