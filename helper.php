<?php 
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DB', 'utsmopro');

    $db_connect = mysqli_connect(HOST, USER, PASS, DB) or die ('Unable COnnect');

    header('Content-Type: application/json');

?>