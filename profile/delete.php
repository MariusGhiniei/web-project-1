<?php
    session_start();
    if(isset($_POST["delete-submit"])) { 
        

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

        $sql = "DELETE FROM users WHERE users_id = $id;";
        
        
       

        if(mysqli_query($conn, $sql))
        {
            session_unset();
            session_destroy();
    
            header("location: ../index-home-page.php");
            exit();
        }
        else
        {
            header("location: profile.php?error=failed");
            echo "Error deleting record: " . mysqli_error($conn);
        }

        $conn->close();

    }
?>