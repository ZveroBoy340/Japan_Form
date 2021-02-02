<?php

// Database connection data
define ("DB_HOST", "localhost");
define ("DB_NAME", "japan");
define ("DB_USER", "root");
define ("DB_PASS", "root");

// Create PDO connection to database
$db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);

?>