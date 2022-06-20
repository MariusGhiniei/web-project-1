<?php
    session_start();
    if(isset($_POST["update-profile-submit"])) { 
        
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
        $sql = "UPDATE users SET users_username = '" . $_POST["username"] . "', users_email = '" . $_POST["email"] . "' WHERE users_id = $id;";

        $_SESSION["users_username"] = $_POST["username"];
        if(mysqli_query($conn, $sql))
        {
            header("location: profile.php?error=uptaded");
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