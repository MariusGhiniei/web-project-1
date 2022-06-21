<?php

    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if(strpos($url,"text-created") == true)
    {
        echo "<div class='has-text-centered'>
                    <div class='is-mobile is-centered'>
                        <div>
                            <div class='notification center is-success'>
                                <p>Your Text Post has been created !</p>
                                <p class='pt-1'>You can see it  <a href='../feed/feed.php'> 
                                <button class='button is-outlined is-rounded is-small is-info is-light'> here </button>
                                </a></p>
                                <button class='delete'></button>
                            </div>
                        </div>
                    </div>
                </div>";
    }
    if(strpos($url,"text-failed") == true)
    {
        echo "<div class='has-text-centered'>
                <div class='is-mobile is-centered'>
                    <div>
                        <div class='notification center is-danger'>
                            <p> Something went wrong !</p>
                            <p class='pt-1'>Please try again later.</p>
                            <button class='delete'></button>
                        </div>
                    </div>
                </div>
            </div>";
    }

    if(strpos($url,"image-created") == true)
    {
        echo "<div class='has-text-centered'>
                    <div class='is-mobile is-centered'>
                        <div>
                            <div class='notification center is-success'>
                                <p>Your Image Post has been created !</p>
                                <p class='pt-1'>You can see it  <a href='../feed/feed.php'> 
                                <button class='button is-outlined is-rounded is-small is-info is-light'> here </button>
                                </a></p>
                                <button class='delete'></button>
                            </div>
                        </div>
                    </div>
                </div>";
    }

    if(strpos($url,"image-failed") == true)
    {
        echo "<div class='has-text-centered'>
                <div class='is-mobile is-centered'>
                    <div>
                        <div class='notification center is-danger'>
                            <p> Something went wrong !</p>
                            <p class='pt-1'>Please try again later.</p>
                            <button class='delete'></button>
                        </div>
                    </div>
                </div>
            </div>";
    }

    if(strpos($url,"video-created") == true)
    {
        echo "<div class='has-text-centered'>
                    <div class='is-mobile is-centered'>
                        <div>
                            <div class='notification center is-success'>
                                <p>Your Video Post has been created !</p>
                                <p class='pt-1'>You can see it  <a href='../feed/feed.php'> 
                                <button class='button is-outlined is-rounded is-small is-info is-light'> here </button>
                                </a></p>
                                <button class='delete'></button>
                            </div>
                        </div>
                    </div>
                </div>";
    }

    if(strpos($url,"video-failed") == true)
    {
        echo "<div class='has-text-centered'>
                <div class='is-mobile is-centered'>
                    <div>
                        <div class='notification center is-danger'>
                            <p> Something went wrong !</p>
                            <p class='pt-1'>Please try again later.</p>
                            <button class='delete'></button>
                        </div>
                    </div>
                </div>
            </div>";
    }

    if(strpos($url,"checkin-created") == true)
    {
        echo "<div class='has-text-centered'>
                    <div class='is-mobile is-centered'>
                        <div>
                            <div class='notification center is-success'>
                                <p>Your Check-in Post has been created !</p>
                                <p class='pt-1'>You can see it  <a href='../feed/feed.php'> 
                                <button class='button is-outlined is-rounded is-small is-info is-light'> here </button>
                                </a></p>
                                <button class='delete'></button>
                            </div>
                        </div>
                    </div>
                </div>";
    }

    if(strpos($url,"checkin-failed") == true)
    {
        echo "<div class='has-text-centered'>
                <div class='is-mobile is-centered'>
                    <div>
                        <div class='notification center is-danger'>
                            <p> Something went wrong !</p>
                            <p class='pt-1'>Please try again later.</p>
                            <button class='delete'></button>
                        </div>
                    </div>
                </div>
            </div>";
    }



?>