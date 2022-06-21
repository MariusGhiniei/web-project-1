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

    $sql = "SELECT * FROM post_image;";

    $result = mysqli_query($conn, $sql);

    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){

            $getUser = "SELECT users_username FROM users WHERE users_id = " . $row["id"] . ";";
            $userResult = $conn->query($getUser);
            $user = $userResult->fetch_assoc();

            echo '<div class="tile is-parent is-3 is-vertical">'
                    . '<article class="tile is-child box has-background-white-ter">'
                        . '<p class="title">' . $row["post_text"] . '</p>'
                        . '<img src="data:image/jpeg;charset=utf8;base64,'.base64_encode($row['post_image']).'" height="200" width="200"/>'
                        . '<p class="subtitle has-text-link is-italic">@' . $user["users_username"] . '</p>'
                        . '<div class="sharethis-inline-share-buttons"></div>'
                    . '</article>'
                . '</div>';

            
        }
    } 
?>