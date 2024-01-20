<?php

session_start();

require_once "CAD.php";
$cad = new CAD();

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

// Variables para almacenar mensajes
$mensajeBanner = "";
$mensajeProduccion = "";

// Seccion para agregar un banner
if (isset($_POST['addBanner'])){
    if(!empty($_FILES['banner']['tmp_name'])){
        $img = $_FILES['banner']['tmp_name'];
        $imgContent = addslashes(file_get_contents($img));

        $bannerResult = $cad->addBanner($imgContent);

    }
}

// Seccion para eliminar un banner
if (isset($_POST['deleteBanner']) && isset($_POST['idBanner'])){
    $bannerId = $_POST['idBanner'];

    $bannerDeleteResult = $cad->deleteBanner($bannerId);
}

unset($_POST['addBanner']);
unset($_POST['deleteBanner']);
unset($_POST['idBanner']);
unset($_FILES['banner']['tmp_name']);
?>
<html>
    <head>
        <script type="text/javascript" src="../js/editFunctionality.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../styles/editStyles/style.css">
        <link rel="stylesheet" type="text/css" href="../styles/editStyles/styleDesktop.css" media="screen and (min-width: 1024px)">
        <link rel="stylesheet" type="text/css" href="../styles/editStyles/styleTablet.css" media="screen and (max-width: 1023px) and (min-width: 768px)">
        <link rel="stylesheet" type="text/css" href="../styles/editStyles/styleMobile.css" media="screen and (max-width: 767px)">
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
                <div id="title-Container">Edit Productions</div>
                <div class="line"></div>
                <div class="subtitle">Add Production</div>
                <div class="edit-Container">
                    <form>
                        <div class="label">Type</div>
                            <select class="dropdown" name="type">
                                <option value="movie">Movie</option>
                                <option value="series">Series</option>
                            </select>
                        <div class="label">Name of the production</div>
                        <input class="text" type="text" name="name=" placeholder="Write here...">
                        <div class="label">Genre</div>
                        <input class="text" type="text" name="genre" placeholder="Write here...">
                        <div class="label">Rating</div>
                        <input class="text" type="text" name="rating" placeholder="Write here...">
                        <div class="label">Director(s)</div>
                        <input class="text" type="text" name="director" placeholder="Write here...">
                        <div class="label">Writer(s)</div>
                        <input class="text" type="text" name="writer" placeholder="Write here...">
                        <div class="label">Cast</div>
                        <input class="text" type="text" name="cast" placeholder="Write here...">
                        <div class="label">Release Date</div>
                        <input class="text" type="text" name="date" placeholder="Write here...">
                        <div class="label">Runtime</div>
                        <input class="text" type="text" name="runtime" placeholder="Write here...">
                        <div class="label">Poster</div>
                        <input type="file" name="imagen">
                        <div class="label">Best Movies 2023</div>
                        <input class="checkbox" type="checkbox" name="bestMovies" value="opcion1">
                        <div class="label">Best Series 2023</div>
                        <input class="checkbox" type="checkbox" name="bestSeries" value="opcion1">
                        <div class="label">Premiere Movies</div>
                        <input class="checkbox" type="checkbox" name="premiereMovies" value="opcion1">
                        <div class="label">New Series & Seasons</div>
                        <input class="checkbox" type="checkbox" name="newSeries" value="opcion1">
                        <button id="add-Button">Add</button>
                    </form>
                </div>
                <div class="line"></div>
                <div class="subtitle">Delete Production</div>
                <div class="edit-Container">
                    <form>
                        <div class="label">Name or ID of the production</div>
                        <input class="text" type="text" placeholder="Write here...">
                        <button id="delete-Button">Delete</button>
                    </form>
                </div>
                <div class="line"></div>
                <div class="subtitle">Change Production</div>
                <div class="edit-Container">
                    <form>
                        <div class="label">Id of the production</div>
                        <input class="text" type="text" placeholder="Write here...">
                        <div class="label">Type</div>
                            <select class="dropdown" name="type">
                                <option value="movie">Movie</option>
                                <option value="series">Series</option>
                            </select>
                        <div class="label">Name of the production</div>
                        <input class="text" type="text" placeholder="Write here...">
                        <div class="label">Rating of the production</div>
                        <input class="text" type="text" placeholder="Write here...">
                        <div class="label">Genre</div>
                        <input class="text" type="text" placeholder="Write here...">
                        <div class="label">Rating</div>
                        <input class="text" type="text" placeholder="Write here..." >
                        <div class="label">Director(s)</div>
                        <input class="text" type="text" placeholder="Write here...">
                        <div class="label">Writer(s)</div>
                        <input class="text" type="text" placeholder="Write here...">
                        <div class="label">Cast</div>
                        <input class="text" type="text" placeholder="Write here...">
                        <div class="label">Release Date</div>
                        <input class="text" type="text" placeholder="Write here...">
                        <div class="label">Runtime</div>
                        <input class="text" type="text" placeholder="Write here...">
                        <div class="label">Poster</div>
                        <input type="file" name="imagen">
                        <button id="add-Button">Edit</button>
                    </form>
                </div>
                <div class="line"></div>
                <div class="subtitle">Add Banner</div>
                <div class="edit-Container">
                    <form action="edit.php" method="POST" enctype="multipart/form-data">
                        <div class="label">Banner</div>
                        <input type="file" name="banner">
                        <button id="addBanner-Button" name="addBanner">Add</button>
                    </form>
                </div>
                <div class="line"></div>
                <div class="subtitle">Delete Banner</div>
                <div class="edit-Container">
                    <form action="edit.php" method="POST">
                        <div class="label">ID of the banner</div>
                        <input class="text" type="text" name="idBanner" placeholder="Write here...">
                        <button id="deleteBanner-Button" name="deleteBanner">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>