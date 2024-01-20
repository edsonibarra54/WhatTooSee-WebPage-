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
        <script type="text/javascript" src="../js/editProfileFunctionality.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../styles/editProfileStyles/style.css">
        <link rel="stylesheet" type="text/css" href="../styles/editProfileStyles/styleDesktop.css" media="screen and (min-width: 1024px)">
        <link rel="stylesheet" type="text/css" href="../styles/editProfileStyles/styleTablet.css" media="screen and (max-width: 1023px) and (min-width: 768px)">
        <link rel="stylesheet" type="text/css" href="../styles/editProfileStyles/styleMobile.css" media="screen and (max-width: 767px)">
        <link rel="stylesheet" href="../splide-4.1.3/dist/css/splide.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Urbanist">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas Neue">
        <title>What to see</title>
        <link rel="icon" href="../img/favicon.png" type="image/png">
    </head>
    <body>
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
                <div id="title-Container">Edit Profile</div>
                <div class="line"></div>
                <div class="edit-Container">
                    <div class="label">Nickname</div>
                    <input class="text" type="text" placeholder="Write here...">
                    <div class="label">URL of the profile image</div>
                    <input class="text" type="text" placeholder="Write here...">
                    <div class="label">About me description</div>
                    <input class="text" type="text" placeholder="Write here...">
                    <button id="edit-Button">Edit</button>
                </div>
            </div>
        </div>
    </body>
</html>