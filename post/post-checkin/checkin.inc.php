<?php

    session_start();
    if(isset($_POST["post-checkin-submit"])) { 
        
        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "zuzugramDb";

        $conn = mysqli_connect($serverName, $userName, $password, $dbName);

        if(!$conn)
        {
            die("Connection failed: " . mysqli_connect_error());
        }

        $id = $_SESSION["users_id"];

        $sql = "INSERT INTO post_checkin (id, post_text, post_lat,post_log) 
        VALUES ($id, '" . $_POST["post-text"] . "', '" . $_POST["post-lat"] . "', '" . $_POST["post-log"] . "');";

        if(mysqli_query($conn, $sql))
        {
            header("location: ../post.php?error=checkin-created");
            exit();
        }
        else
        {
            header("location: ../post.php?error=checkin-failed");
            echo "Error deleting record: " . mysqli_error($conn);
        }

        $conn->close();

    }


?>