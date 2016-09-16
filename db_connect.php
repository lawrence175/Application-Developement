<?php
/*
SoftwareDeveloper:lawrence k & Tryphine A.
Creating a connection to mysql database,specifically 'register_db'
*/
?>

<?php

error_reporting(E_ALL ^ E_DEPRECATED);  // ensures compatibility of new versions like mysqli.


// creates a connection to the database.


$connection = mysql_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('diagnosis');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
?>