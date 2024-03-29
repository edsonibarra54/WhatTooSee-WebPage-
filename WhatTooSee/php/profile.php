<?php

session_start();

if (isset($_SESSION['user_email']) && isset($_SESSION['user_password']) && isset($_SESSION['user_admin'])) {
    $user_email = $_SESSION['user_email'];
    $user_password = $_SESSION['user_password'];
    $user_id = $_SESSION['user_id'];
    $user_admin = $_SESSION['user_admin'];

    $sesionIniciada = true;
    #echo "Las variables son '$user_email' - '$user_password' - '$user_admin'";
}
else{
    $sesionIniciada = false;
    #echo "Las variables de sesión no se han establecido.";
}

?>
<html>
    <head>
        <script type="text/javascript" src="../js/profileFunctionality.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../styles/profileStyles/style.css">
        <link rel="stylesheet" type="text/css" href="../styles/profileStyles/styleDesktop.css" media="screen and (min-width: 1024px)">
        <link rel="stylesheet" type="text/css" href="../styles/profileStyles/styleTablet.css" media="screen and (max-width: 1023px) and (min-width: 768px)">
        <link rel="stylesheet" type="text/css" href="../styles/profileStyles/styleMobile.css" media="screen and (max-width: 767px)">
        <link rel="stylesheet" href="../splide-4.1.3/dist/css/splide.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Urbanist">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas Neue">
        <title>What to see</title>
        <link rel="icon" href="../img/favicon.png" type="image/png">
    </head>
    <body>
        <div id="edit" onclick="editPages()">Edit</div>
        <div id="container">
        <div id="Menu">
                <div id="Menu-top">
                    <div id="Logo" onclick="redireccionar(0)"></div>
                    <div id="mainListDiv" class="main_list">
                        <ul class="List" id="ListMenu">
                            <li><a href="#" class="Link" onclick="redireccionar(1)">Movies/Series</a></li>
                            <li><a href="#" class="Link" onclick="redireccionar(2)">Community</a></li>
                            <?php
                                if ($sesionIniciada) {
                                    echo '<li><a href="#" class="Link" onclick="goProfile()">My profile</a></li>';
                                    echo '<li><a href="#" class="Link" onclick="cerrarSesion()">Log out</a></li>';
                                }
                                else{
                                    echo '<li><a href="#" class="Link" onclick="redireccionar(3)">Log in</a></li>';
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="menu-toggle">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>
                </div>
                <div id="secondListDiv" class="second_list">
                    <ul class="List" id="ListMenu2">
                        <li><a href="#" class="Link" onclick="redireccionar(1)">Movies/Series</a></li>
                        <li><a href="#" class="Link" onclick="redireccionar(2)">Community</a></li>
                        <?php
                            if ($sesionIniciada) {
                                echo '<li><a href="#" class="Link" onclick="goProfile()">My profile</a></li>';
                                echo '<li><a href="#" class="Link" onclick="redireccionar(5)">Log out</a></li>';
                            }
                            else{
                                echo '<li><a href="#" class="Link" onclick="redireccionar(3)">Log in</a></li>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <div id="page-Container">
                <div id="profile-Container">
                    <div id="corazon" class="corazon-vacio">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div id="profile-Image"></div>
                    <div id="name-Container">
                        <div class="line"></div>
                        <div id="title">Killer of the flower mo</div>
                        <div class="line"></div>
                    </div>
                    <div id="follow">
                        <div>Followers:</div><div id="followersNo">20</div>
                        <div>Following:</div><div id="followingNo">10</div>
                    </div>
                </div>
                <button id="editProfile" onclick="redireccionar(4)">Edit profile</button>
                <div class="line"></div>
                <div id="subtitle">About me</div>
                <div id="aboutMe">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                <div class="line"></div>
                <div id="subtitle">Commentaries</div>
                <div id="commentaries-Container">
                    <div class="comment-Container">
                        <div class="comment-Info">
                            <div class="poster-Container" onclick="production()">
                                <img class="posterImage" src="../img/KillersOfTheFlowerMoon.jpg">
                            </div>
                            <div class="cal-Container">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                    </div>
                    <div class="comment-Container">
                        <div class="comment-Info">
                            <div class="poster-Container" onclick="production()">
                                <img class="posterImage" src="../img/KillersOfTheFlowerMoon.jpg">
                            </div>
                            <div class="cal-Container">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                    </div>
                    <div class="comment-Container">
                        <div class="comment-Info">
                            <div class="poster-Container" onclick="production()">
                                <img class="posterImage" src="../img/KillersOfTheFlowerMoon.jpg">
                            </div>
                            <div class="cal-Container">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                    </div>
                    <div class="comment-Container">
                        <div class="comment-Info">
                            <div class="poster-Container" onclick="production()">
                                <img class="posterImage" src="../img/KillersOfTheFlowerMoon.jpg">
                            </div>
                            <div class="cal-Container">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                    </div>
                    <div class="comment-Container">
                        <div class="comment-Info">
                            <div class="poster-Container" onclick="production()">
                                <img class="posterImage" src="../img/KillersOfTheFlowerMoon.jpg">
                            </div>
                            <div class="cal-Container">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>