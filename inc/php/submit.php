<?php

    include 'db.php';

    $title = $_POST['title'];
    $time = $_POST['time'];

    $stmt = $mysqli->prepare("INSERT INTO timeago(title, timeago) VALUES (?, ?)");
    $stmt->bind_param('ss', $title, $time);
    $stmt->execute();
    $stmt->close();
?>