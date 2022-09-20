<?php
define("DB_HOST", 'localhost');
define("DB_USER", 'root');
define("DB_PASS", 'root1234');
define("DB_NAME", 'dodo');

// create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// check connection
if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}
