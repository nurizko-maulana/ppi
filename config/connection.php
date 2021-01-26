<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'ppi';

    $conn = mysqli_connect($host, $user, $pass , $db);

    if (mysqli_connect_errno()){
        echo "failed";
        exit();
    }
    date_default_timezone_set("Asia/Jakarta");
?>