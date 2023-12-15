<?php
require "../dbConnection.php";
session_start();

if(empty($_SESSION['id'])){
    echo 'ESI NEPRISIJUNGES';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                        <a class="nav-link" href="../PagrindinisLangas.html">Filmai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../UzsakymoKurimas/UzsakymoKurimoLangas.html">Filmų nuoma</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../UzsakymuSarasas/UzsakymoSarasuLangas.html">Užsakymai</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="ProfilioLangas.php" class="btn btn-primary me-2">Profilis</a>
                    <a href="../PagrindinisLangasPav.html" class="btn btn-primary">Atsijungti</a>
                </div>
            </div>
        </div>
    </nav>
    <?php
        // if(empty($_SESSION['id'])){
        //     echo "<h3>Neprisijunges ESI</h3>";
        // }
        // else{
        //     echo "<h3>Prisijunges esi, good</h3>";
        // }
    ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <?php
                        $id = $_SESSION['id'];
                        $query = "SELECT * from klientai where idKlientas ='$id'";
                        $results = mysqli_query($db, $query);
                        $row = mysqli_fetch_assoc($results);
                        $name = $row['vardas'];
                        $lastname = $row['pavarde'];
                        $email = $row['el_pastas'];
                        $phone = $row['telefono_nr'];
                        $sex = $row['lytis'];

                        echo "<h2 class='card-title'>". $name ." ". $lastname ."</h2>";
                        ?>

                        <!-- <h2 class="card-title"><?php echo $_SESSION['name'] , ' ', $_SESSION['lastname'];?></h2> -->
                        <ul class="list-group list-group-flush text-start">
                            <!-- <li class="list-group-item">Naudotojo vardas: Naudotojas</li> -->
                            <?php
                                echo '<li class="list-group-item">E-paštas: '. $email .'</li>';
                                echo '<li class="list-group-item">Telefono numeris: '. $phone .'</li>';
                                echo '<li class="list-group-item">Lytis: '. $sex .'</li>';
                            // <li class="list-group-item"><?php echo "E-paštas: ", $_SESSION['email'];</li>
                            // <li class="list-group-item"><?php echo "Telefono numeris: ", $_SESSION['phone'];</li>
                                $id = $_SESSION['id'];
                                $query = "SELECT * from adresai where fk_Klientas ='$id'";
                                $results = mysqli_query($db, $query);
                                if ($results) {
                                    $num_rows = mysqli_num_rows($results);
                                    if($num_rows === 0){
                                        echo '<li class="list-group-item">Nėra pridėtų adresų</li>';
                                        return;
                                    }
                                    else{
                                        echo '<li class="list-group-item">Adresai:
                                        <ul>';
                                        for ($i = 0; $i < $num_rows; $i++) {
                                            $row = mysqli_fetch_assoc($results);
                                            
                                            echo 
                                            "<li>
                                                <strong>Adresas ". $i + 1 .":</strong>
                                                <ul>
                                                    <li>Šalis: ". $row['fk_Salis'] ."</li>
                                                    <li>Miestas: ". $row['miestas'] ."</li>
                                                    <li>Gatvė: ". $row['gatve'] ." g.</li>
                                                    <li>Namo numeris: ". $row['namo_numeris'] ."</li>
                                                    <li>Buto numeris: ". $row['buto_numeris'] ."</li>
                                                    <li>Pašto kodas: ". $row['pasto_kodas'] ."</li>
                                                </ul>
                                            </li>";
                                        }
                                        echo '</ul>';
                                    }   
                                }
                            ?>
                            <!-- <li class="list-group-item">Adresai:
                                <ul>
                                    <li>
                                        <strong>Adresas 1:</strong>
                                        <ul>
                                            <li>Šalis: Lietuva</li>
                                            <li>Miestas: Kaunas</li>
                                            <li>Gatvė: Studentų g.</li>
                                            <li>Namo numeris: 50</li>
                                            <li>Pašto kodas: 12345</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <strong>Adresas 2:</strong>
                                        <ul>
                                            <li>Šalis: Latvia</li>
                                            <li>Miestas: Rīga</li>
                                            <li>Gatvė: Skanstes iela</li>
                                            <li>Namo numeris: 25</li>
                                            <li>Pašto kodas: LV-1013</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->
                            <li class="list-group-item"><?php echo "Gimimo data: ", $_SESSION['birthDate'];?></li>
                        </ul>
                        <a href="ProfilioRedagavimoLangas.php" class="btn btn-primary mt-3">Redaguoti profilį</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
