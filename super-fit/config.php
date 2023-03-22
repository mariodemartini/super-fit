<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', 'root');
    define('BASE', 'mydb');

    $conn = new MySQLi(HOST, USER, PASS, BASE);
?>