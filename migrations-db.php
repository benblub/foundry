<?php
require 'credentials.php';

$credentials = getCredentials();

return [
    'dbname' => $credentials['dbname'],
    'user' => $credentials['user'],
    'password' => $credentials['password'],
    'host' => $credentials['host'],
    'driver' => 'pdo_mysql',
];
