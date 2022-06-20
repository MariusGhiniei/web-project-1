<?php

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "zuzugramDb";

    $conn = mysqli_connect($serverName, $userName, $password, $dbName);

    if(!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

    $stmt = $conn->prepare("SELECT users_username,users_email FROM users WHERE users_id = ?;");

    $stmt->bind_param("i", $_SESSION["users_id"]);
    $stmt->execute();
    $stmt->bind_result($username,$email);
    $stmt->fetch();
    $stmt->close();



?>