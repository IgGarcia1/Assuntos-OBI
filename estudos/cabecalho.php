<!DOCTYPE html>
<html lang="pt-bt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Minha página</title>
        <link rel="stylesheet" href="./bootstrap-4.3.1-dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="./bootstrap-4.3.1-dist/css/bootstrap-grid.css"/>
        <link rel="stylesheet" href="./bootstrap-4.3.1-dist/css/bootstrap-reboot.css"/>
        <link rel="stylesheet" href="./bootstrap-4.3.1-dist/css/bootstrap.css"/>
        <link rel="stylesheet" href="./css/index.css">
        <link rel="stylesheet" href="./css/responsiveStyle.css">
        <script type="text/javascript" src="./js/jquery.js"></script>

    </head>
    <body style="background-color: rgba(0,0,0,0.7);">
        <div class="container" style="background-color: white;">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Assuntos
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="./dicionario.php">Dicionário</a>
                                <a class="dropdown-item" href="#">Matriz</a>
                                <a class="dropdown-item" href="./recursao.php">Recursão</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
