<?php
require_once 'db_connect.php';
//set up pdo with connection/dbname/user/password
$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);

//tell pdo to throw exeptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//check connection status
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$query = 'DROP table IF EXISTS national_parks;';

$dbc->exec($query);

$query = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    date_established DATE NOT NULL,
    area_in_acres DOUBLE PRECISION NOT NULL,
    description TEXT,
    PRIMARY KEY (id)
)';

$dbc->exec($query);