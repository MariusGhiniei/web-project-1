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

    $sql = "SELECT * FROM post_text";

    $result = mysqli_query($conn, $sql);

    

    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $getUser = "SELECT users_username FROM users WHERE users_id = " . $row["id"] . ";";
            $userResult = $conn->query($getUser);
            $user = $userResult->fetch_assoc();
            

            echo '<div class="tile is-parent is-3 is-vertical">'
                    . '<article class="tile is-child box has-background-white-ter">'
                        . '<p class="title">' . $row["post_text"] . '</p>'
                        . '<p class="subtitle has-text-link is-italic">@' . $user["users_username"] . '</p>'
                        .'<div class="sharethis-inline-share-buttons"></div>'
                    . '</article>'
                    
                . '</div>';
            
        }
    }

    $conn->close();
?>