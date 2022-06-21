<?php
    session_start();

    if(isset($_POST["post-text-submit"])) { 
        
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

        $sql = "INSERT INTO post_text (id, post_text) VALUES ($id, '" . $_POST["post-text"] . "');";

        if(mysqli_query($conn, $sql))
        {
            header("location: ../post.php?error=text-created");
            exit();
        }
        else
        {
            header("location: ../post.php?error=text-failed");
            echo "Error deleting record: " . mysqli_error($conn);
        }

        $conn->close();

    }


?>