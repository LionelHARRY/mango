<?php

$db['db_host'] = 'localhost';
$db['db_database'] = 'cms';
$db['db_username'] = 'root';
$db['db_password'] = '';
$db['db_port'] = 3307;

foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);

if ($connection) {
    echo 'IN';
}
