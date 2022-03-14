<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DBNAME', 'software');

$conn = new mysqli(HOST ,USER,PASSWORD,DBNAME);
$conn ->set_charset('utf8');

if (!$conn) {
    // code...
    echo $conn ->connect_error;
}

?>