<?php

session_start();

if (isset($_SESSION['user_email']) && isset($_SESSION['user_password']) && isset($_SESSION['user_admin'])) {
    $user_email = $_SESSION['user_email'];
    $user_password = $_SESSION['user_password'];
    $user_id = $_SESSION['user_id'];
    $user_admin = $_SESSION['user_admin'];
    $message = "Email: $user_email, Contraseña: $user_password, ID de usuario: $user_id, Rol de administrador: $user_admin";

    $sesionIniciada = true;
    #echo "Las variables son '$user_email' - '$user_password' - '$user_admin'";
}
else{
    $sesionIniciada = false;
    $message = "No hay sesion iniciada";
    #echo "Las variables de sesión no se han establecido.";
}

?>

<html>
    <head>
        <script type="text/javascript" src="../js/functionality.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../styles/indexStyles/style.css">
        <link rel="stylesheet" type="text/css" href="../styles/indexStyles/styleDesktop.css" media="screen and (min-width: 1024px)">
        <link rel="stylesheet" type="text/css" href="../styles/indexStyles/styleTablet.css" media="screen and (max-width: 1023px) and (min-width: 768px)">
        <link rel="stylesheet" type="text/css" href="../styles/indexStyles/styleMobile.css" media="screen and (max-width: 767px)">
        <link rel="stylesheet" href="../splide-4.1.3/dist/css/splide.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Urbanist">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas Neue">
        <title>What to see</title>
        <link rel="icon" href="../img/favicon.png" type="image/png">
    </head>
    <body>
        <div id="Container">
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
            <div id="pageContent">
                <div id="Banner">
                    <div class="splide" id="bannerSlider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide"><img class="bannerImage" src="../img/Image-1.jpeg"></li>
                                <li class="splide__slide"><img class="bannerImage" src="../img/Image-2.jpg"></li>
                                <li class="splide__slide"><img class="bannerImage" src="../img/Image-3.jpg"></li>
                                <li class="splide__slide"><img class="bannerImage" src="../img/Image-4.jpg"></li>
                                <li class="splide__slide"><img class="bannerImage" src="../img/Image-5.jpg"></li>
                                <li class="splide__slide"><img class="bannerImage" src="../img/Image-6.jpg"></li>
                                <li class="splide__slide"><img class="bannerImage" src="../img/Image-7.jpg"></li>
                                <li class="splide__slide"><img class="bannerImage" src="../img/Image-8.jpg"></li>
                                <li class="splide__slide"><img class="bannerImage" src="../img/Image-9.jpg"></li>
                                <li class="splide__slide"><img class="bannerImage" src="../img/Image-10.jpg"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="my-carousel-progress">
                    <div class="my-carousel-progress-bar"></div>
                </div>
                <div class="line"></div>
                <div class="subtitle">
                    Best movies of 2023
                </div>
                <div class="posterCarouselBase">
                    <div class="posterCarousel">
                        <div class="splide" id="movieSlider">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/KillersOfTheFlowerMoon.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Killers of the flower moon</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/TMNT.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Las tortugas ninja: Caos mutante</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/Oppenheimer3.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Oppenheimer</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/MarioBros.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Mario Bros: La pelicula</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/JohnWick4.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">John Wick 4</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/Babylon.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Babylon</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/BeauIsAfraid.jpeg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Beau is afraid</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/Barbie.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Barbie</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/Elemental.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Elemental</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/SpidermanATSV.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Spiderman: Across the spiderverse</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line"></div>
                <div class="subtitle">
                    Best series of 2023
                </div>
                <div class="posterCarouselBase">
                    <div class="posterCarousel">
                        <div class="splide" id="serieSlider">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/KillersOfTheFlowerMoon.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Killers of the flower moon</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/TMNT.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Las tortugas ninja: Caos mutante</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/Oppenheimer3.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Oppenheimer</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/MarioBros.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Mario Bros: La pelicula</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/JohnWick4.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">John Wick 4</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/Babylon.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Babylon</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/BeauIsAfraid.jpeg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Beau is afraid</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/Barbie.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Barbie</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/Elemental.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Elemental</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/SpidermanATSV.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Spiderman: Across the spiderverse</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line"></div>
                <div class="subtitle">
                    New movies
                </div>
                <div class="posterCarouselBase">
                    <div class="posterCarousel">
                        <div class="splide" id="movieRelease">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/KillersOfTheFlowerMoon.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Killers of the flower moon</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/TMNT.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Las tortugas ninja: Caos mutante</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/Oppenheimer3.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Oppenheimer</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/MarioBros.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Mario Bros: La pelicula</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/JohnWick4.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">John Wick 4</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/Babylon.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Babylon</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/BeauIsAfraid.jpeg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Beau is afraid</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/Barbie.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Barbie</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/Elemental.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Elemental</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/SpidermanATSV.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Spiderman: Across the spiderverse</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line"></div>
                <div class="subtitle">
                    New series and seasons
                </div>
                <div class="posterCarouselBase">
                    <div class="posterCarousel">
                        <div class="splide" id="serieRelease">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/KillersOfTheFlowerMoon.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Killers of the flower moon</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/TMNT.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Las tortugas ninja: Caos mutante</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/Oppenheimer3.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Oppenheimer</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/MarioBros.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Mario Bros: La pelicula</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/JohnWick4.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">John Wick 4</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/Babylon.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Babylon</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/BeauIsAfraid.jpeg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Beau is afraid</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/Barbie.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Barbie</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/Elemental.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Elemental</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="posterContainer">
                                            <div class="whiteLine"></div>
                                            <div class="poster">
                                                <img class="posterImage" src="../img/SpidermanATSV.jpg">
                                                <div class="gradient"></div>
                                            </div>
                                            <div class="posterInfo">
                                                <div class="posterTitle">Spiderman: Across the spiderverse</div>
                                                <div class="posterCali">
                                                    <i class="fas fa-star"></i>
                                                    <div class="calificacion">10</div>
                                                </div>
                                            </div>
                                            <div class="whiteLine"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer"></div>
            </div>
        </div>
        <script src="../splide-4.1.3/dist/js/splide.min.js"></script>
    </body>
</html>