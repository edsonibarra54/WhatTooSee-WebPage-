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
        <script type="text/javascript" src="../js/materialFunctionality.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../styles/materialStyles/style.css">
        <link rel="stylesheet" type="text/css" href="../styles/materialStyles/styleDesktop.css" media="screen and (min-width: 1024px)">
        <link rel="stylesheet" type="text/css" href="../styles/materialStyles/styleTablet.css" media="screen and (max-width: 1023px) and (min-width: 768px)">
        <link rel="stylesheet" type="text/css" href="../styles/materialStyles/styleMobile.css" media="screen and (max-width: 767px)">
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
                <div id="poster-Container">
                    <div id="id-Material">Id = 1000</div>
                    <div id="poster">
                        <img id="poster-Image" src="../img/KillersOfTheFlowerMoon.jpg">
                    </div>
                    <div id="name-Container">
                        <div id="title">Killers of the flower moon</div>
                        <div class="line"></div>
                        <div id="cali-Container">
                            <i class="fas fa-star" id="star"></i>
                            <div id="calificacion">10</div>
                        </div>
                        <div class="line"></div>
                        <div class="text-Container">
                            <div class="charact">Genre:</div>
                            <div class="info" id="genre">Crime, Drama</div>
                        </div>
                        <div class="text-Container">
                            <div class="charact">Rating:</div>
                            <div class="info" id="rating">R</div>
                        </div>
                        <div class="text-Container">
                            <div class="charact">Director:</div>
                            <div class="info" id="director">Martin Scorsese</div>
                        </div>
                        <div class="text-Container">
                            <div class="charact">Writer:</div>
                            <div class="info" id="writer">Eric Roth, Martin Scorsese</div>
                        </div>
                        <div class="text-Container">
                            <div class="charact">Cast:</div>
                            <div class="info" id="cast">Leonardo DiCaprio, Robert De Niro, Jesse Plemons</div>
                        </div>
                        <div class="text-Container">
                            <div class="charact">Release Date:</div>
                            <div class="info" id="release">Oct 20, 2023</div>
                        </div>
                        <div class="text-Container">
                            <div class="charact">Runtime:</div>
                            <div class="info" id="runtime">3h 26m</div>
                        </div>
                    </div>
                </div>
                <div class="line"></div>
                <div id="subtitle">Commentaries</div>
                <div class="line"></div>
                <div id="addComment">
                    <div id="label">Add a comment. (500 characters max.)</div>
                    <div class="comment-Container">
                        <div class="text">
                            <textarea id="text-Comment" placeholder="Search..." maxlength="500"></textarea>
                        </div>
                    </div>
                    <div id="cal-Selector">
                        <div class="cal-Container" id="cal-Stars">
                            <i class="fas fa-star" onclick="selectStar(this)"></i>
                            <i class="fas fa-star" onclick="selectStar(this)"></i>
                            <i class="fas fa-star" onclick="selectStar(this)"></i>
                            <i class="fas fa-star" onclick="selectStar(this)"></i>
                            <i class="fas fa-star" onclick="selectStar(this)"></i>
                        </div>
                        <button id="submit">Submit</button>
                    </div>
                </div>
                <div class="line"></div>
                <div id="commentaries-Container">
                    <div class="comment-Container">
                        <div class="profile-Container" onclick="profile()">
                            <div class="profile-Image"></div>
                            <div class="profile-Name">Name</div>
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
                        <div class="profile-Container" onclick="profile()">
                            <div class="profile-Image"></div>
                            <div class="profile-Name">Name</div>
                            <div class="cal-Container">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                    </div>
                    <div class="comment-Container">
                        <div class="profile-Container" onclick="profile()">
                            <div class="profile-Image"></div>
                            <div class="profile-Name">Name</div>
                            <div class="cal-Container">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                    </div>
                    <div class="comment-Container">
                        <div class="profile-Container" onclick="profile()">
                            <div class="profile-Image"></div>
                            <div class="profile-Name">Name</div>
                            <div class="cal-Container">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                    </div>
                    <div class="comment-Container">
                        <div class="profile-Container" onclick="profile()">
                            <div class="profile-Image"></div>
                            <div class="profile-Name">Name</div>
                            <div class="cal-Container">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>