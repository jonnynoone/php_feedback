<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'skoon');
define('DB_PASS', '1234');
define('DB_NAME', 'kingdom');

// Create connection
$link = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection 
if ($link->connect_error) {
    die('Connection failed: ' . $link->connect_error);
}