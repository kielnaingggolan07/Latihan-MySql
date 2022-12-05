<?php
    $server = "localhost";
    $user = "id19826463_latihandatabasesql";
    $password = "Suryaphpsql1.";
    $database = "id19826463_latihandatabase";

    $db = mysqli_connect($server, $user, $password, $database);

    if(!$db) {
        die("Failed to connect to database: " . mysqli_connect_error());
    }
?>