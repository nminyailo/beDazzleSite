<?php
$db = mysqli_connect('127.0.0.1', 'root', "", 'beDazzle');
if (mysqli_connect_errno()) {
    echo 'Database connection fail with the following errors: '. mysqli_connect_error();
    die();
}

?>