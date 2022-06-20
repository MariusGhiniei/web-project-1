<?php

    session_start();

    if(isset($_POST["post-video-submit"])) { 
        
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

        $sql = "INSERT INTO post_video (id, post_text, post_link) VALUES ($id, '" . $_POST["post-text"] . "', '" . $_POST["post-link"] . "');";

        if(mysqli_query($conn, $sql))
        {
            header("location: ../post.php?error=created");
            exit();
        }
        else
        {
            header("location: ../post.php?error=failed");
            echo "Error deleting record: " . mysqli_error($conn);
        }

        $conn->close();
    }

?>