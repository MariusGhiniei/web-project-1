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

        $image = file_get_contents($_FILES["post-image"]["tmp_name"]);

        $query = "INSERT INTO post_image (id, post_text, post_image) VALUES (?,?,?);";

        if ($stmt = mysqli_prepare($conn, $query)){

        $stmt->bind_param("sss", $id, $_POST["post-text"], $image);
        $stmt->execute();

        header("location: ../post.php?error=image-created");
        }
        else
        {
            header("location: ../post.php?error=image-failed");
            echo "Error deleting record: " . mysqli_error($conn);
        }
        $conn->close();

        
    }

?>