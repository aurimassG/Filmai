<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FISK</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/fa6d7669c1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <style>
        .checked {
            color: orange;
        }
    </style>
</head>

<body>
    <!-----------Header----------->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="PagrindinisLangasPav.html">Filmai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="UzsakymoKurimas/UzsakymoKurimoLangas.html">Filmų nuoma</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="UzsakymuSarasas/UzsakymoSarasuLangas.html">Užsakymai
                        </a>
                    </li>
                    <li class="nav-item">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Paieška" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Žanrai
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Detektyvinis</a></li>
                                <li><a class="dropdown-item" href="#">Komedija</a></li>
                                <li><a class="dropdown-item" href="#">Nuotykiu</a></li>
                                <li><a class="dropdown-item" href="#">Kriminalinis</a></li>
                                <li><a class="dropdown-item" href="#">Istorinis</a></li>
                                <li><a class="dropdown-item" href="#">Romantinis</a></li>
                                <li><a class="dropdown-item" href="#">Siaubo</a></li>
                                <li><a class="dropdown-item" href="#">Veiksmo</a></li>
                                <li><a class="dropdown-item" href="#">Trileris</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="Profilis/ProfilioLangas.php" class="btn btn-primary me-2">Profilis</a>
                    <a href="RegistracijosLangas.html" class="btn btn-primary me-2">Registracija</a>
                    <a href="Prisijungimas/PrisijungimoLangas.php" class="btn btn-primary">Prisijungti</a>
                </div>
            </div>
        </div>
    </nav>

    <!----------Main----------->
    <div class="container mt-4">
        <div class="row g-4">

            <div class="col-4" onclick="location.href='Filmas/FilmoLangasPav.html'">
                <div class="border border-2 rounded border-danger p-4">
                    <div class="row mb-0">
                        <div class="col-6">
                            <img src="Pav/movie.png" class="img-fluid img-thumbnail" alt="Filmas">
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12 mb-1 text-break">
                                    <h5>Filmas</h5>
                                </div>
                                <div class="col-12 mb-5">
                                    <h5>Žanras: Veiksmo</h5>
                                </div>
                                <div class="col-12 mb-1">
                                    <p>Išleidimo metai: 2006</p>
                                </div>
                                <div class="col-12 mb-1">
                                    <p>Filmo Trukmė: 2h 25m</p>
                                </div>
                                <div class="col-12 mb-1">
                                    <b class="me-1">7.8/10</b><span class="fa fa-star checked"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4" onclick="location.href='Filmas/FilmoLangasPav.html'">
                <div class="border border-2 rounded border-danger p-4">
                    <div class="row mb-0">
                        <div class="col-6">
                            <img src="Pav/movie.png" class="img-fluid img-thumbnail" alt="Filmas">
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12 mb-1">
                                    <h5>Filmas</h5>
                                </div>
                                <div class="col-12 mb-5">
                                    <h5>Žanras: Veiksmo</h5>
                                </div>
                                <div class="col-12 mb-1">
                                    <p>Išleidimo metai: 2006</p>
                                </div>
                                <div class="col-12 mb-1">
                                    <p>Filmo Trukmė: 2h 25m</p>
                                </div>
                                <div class="col-12 mb-1">
                                    <b class="me-1">7.8/10</b><span class="fa fa-star checked"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4" onclick="location.href='Filmas/FilmoLangasPav.html'">
                <div class="border border-2 rounded border-danger p-4">
                    <div class="row mb-0">
                        <div class="col-6">
                            <img src="Pav/movie.png" class="img-fluid img-thumbnail" alt="Filmas">
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12 mb-1">
                                    <h5>Filmas</h5>
                                </div>
                                <div class="col-12 mb-5">
                                    <h5>Žanras: Veiksmo</h5>
                                </div>
                                <div class="col-12 mb-1">
                                    <p>Išleidimo metai: 2006</p>
                                </div>
                                <div class="col-12 mb-1">
                                    <p>Filmo Trukmė: 2h 25m</p>
                                </div>
                                <div class="col-12 mb-1">
                                    <b class="me-1">7.8/10</b><span class="fa fa-star checked"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4" onclick="location.href='Filmas/FilmoLangasPav.html'">
                <div class="border border-2 rounded border-danger p-4">
                    <div class="row mb-0">
                        <div class="col-6">
                            <img src="Pav/movie.png" class="img-fluid img-thumbnail" alt="Filmas">
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12 mb-1">
                                    <h5>Filmas</h5>
                                </div>
                                <div class="col-12 mb-5">
                                    <h5>Žanras: Veiksmo</h5>
                                </div>
                                <div class="col-12 mb-1">
                                    <p>Išleidimo metai: 2006</p>
                                </div>
                                <div class="col-12 mb-1">
                                    <p>Filmo Trukmė: 2h 25m</p>
                                </div>
                                <div class="col-12 mb-1">
                                    <b class="me-1">7.8/10</b><span class="fa fa-star checked"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4" onclick="location.href='Filmas/FilmoLangasPav.html'">
                <div class="border border-2 rounded border-danger p-4">
                    <div class="row mb-0">
                        <div class="col-6">
                            <img src="Pav/movie.png" class="img-fluid img-thumbnail" alt="Filmas">
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12 mb-1">
                                    <h5>Filmas</h5>
                                </div>
                                <div class="col-12 mb-5">
                                    <h5>Žanras: Veiksmo</h5>
                                </div>
                                <div class="col-12 mb-1">
                                    <p>Išleidimo metai: 2006</p>
                                </div>
                                <div class="col-12 mb-1">
                                    <p>Filmo Trukmė: 2h 25m</p>
                                </div>
                                <div class="col-12 mb-1">
                                    <b class="me-1">7.8/10</b><span class="fa fa-star checked"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>