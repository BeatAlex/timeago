<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "timeago";

    $mysqli = new mysqli($host, $user, $pass, $db);

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        die();
    }
