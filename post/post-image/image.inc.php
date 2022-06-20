<?php

    session_start();
    error_reporting(0);

    if(isset($_POST["post-image-submit"])) { 
        
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

        $fileName = $_FILES["post-image"]["name"];
        $tempName = $_FILES["post-image"]["tmp_name"];
        $folder = "./image/".$fileName;

        move_uploaded_file($tempName, $folder);

        $sql = "INSERT INTO post_image (id, post_text, post_image) VALUES ($id, '" . $_POST["post-text"] . "', '" . $fileName . "');";

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

        
    }

?>