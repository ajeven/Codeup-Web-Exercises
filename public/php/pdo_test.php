<?php
require_once 'db_connect.php';
//set up pdo with connection/dbname/user/password
$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);

//tell pdo to throw exeptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//check connection status
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";