<?php

$connect = mysqli_connect(
    'db', # service name
    'php_docker', # username
    'password', # password
    'php_docker' # db table
);
if ($connect->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $connect;

?>
