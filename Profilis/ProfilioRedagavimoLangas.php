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
    <title>Edit Profile</title>
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
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Profilio redagavimas</h2>
                        <form action="ProfilioAtnaujinimas.php" method="post">
                            <?php
                                $id = $_SESSION['id'];
                                $query = "SELECT * from klientai where idKlientas ='$id'";
                                $results = mysqli_query($db, $query);
                                $row = mysqli_fetch_assoc($results);
                                $name = $row['vardas'];
                                $lastname = $row['pavarde'];
                                $email = $row['el_pastas'];
                                $phone = $row['telefono_nr'];
                                $birth = $row['gimimo_data'];
                                $lytis = $row['lytis'];
                            ?>
                            <div class="mb-3">
                                <label for="realName" class="form-label">Vardas:</label>
                                <?php echo '<input type="text" id="realName" name="realName" class="form-control" value="'. $name .'" required>';?>
                                <!-- <input type="text" id="realName" name="realName" class="form-control" value="Petras" required> -->
                            </div>
                            <div class="mb-3">
                                <label for="lastname" class="form-label">Pavardė:</label>
                                <?php echo '<input type="text" id="lastname" name="lastname" class="form-control" value="'. $lastname .'" required>';?>
                                <!-- <input type="text" id="lastname" name="lastname" class="form-control" value="Petraitis" required> -->
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">E-paštas:</label>
                                <?php echo '<input type="email" id="email" name="email" class="form-control" value="'. $email .'" required>';?>
                                <!-- <input type="email" id="email" name="email" class="form-control" value="emailas@gmail.com" required> -->
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Telefono numeris:</label>
                                <?php echo '<input type="text" id="phone" name="phone" class="form-control" value="'. $phone.'" required>';?>
                                <!-- <input type="email" id="email" name="email" class="form-control" value="emailas@gmail.com" required> -->
                            </div>
                            <div class="mb-3">
                                <label for="birth" class="form-label">Gimimo data:</label>
                                <?php echo '<input type="text" id="birth" name="birth" class="form-control" value="'. $birth .'">';?>
                                <!-- <input type="text" id="birth" name="birth" class="form-control" value="1970-01-01"> -->
                            </div>
                            <div class="mb-3">
                                <label for="sex" class="form-label">Lytis:</label>
                                <?php echo '<input type="text" id="sex" name="sex" class="form-control" value="'. $lytis .'">';?>
                                <!-- <input type="text" id="birth" name="birth" class="form-control" value="1970-01-01"> -->
                            </div>

                            <?php
                            $id = $_SESSION['id'];
                            $query = "SELECT * from adresai where fk_Klientas ='$id'";
                            $results = mysqli_query($db, $query);
                            if ($results) {
                                $num_rows = mysqli_num_rows($results);
                                if($num_rows === 0){
                                    echo '<li class="list-group-item">Nėra pridėtų adresų</li>';

                                    echo '
                                    <div class="mb-3">
                                        <label for="birth" class="form-label">Adresai:</label>
                                        <a>Nėra pridėtų adresų</a>
                                    </div>';
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
                                            <div class='mb-3'>
                                                <label for='country' class='form-label'>Šalis:</label>
                                                <input type='text' id='country' name='country' class='form-control' value='". $row['fk_Salis'] ."'>
                                            </div>
                                            <div class='mb-3'>
                                                <label for='city' class='form-label'>Miestas:</label>
                                                <input type='text' id='city' name='city' class='form-control' value='". $row['miestas'] ."'>
                                            </div>
                                            <div class='mb-3'>
                                                <label for='street' class='form-label'>Gatvė:</label>
                                                <input type='text' id='street' name='street' class='form-control' value='". $row['gatve'] ."'>
                                            </div>
                                            <div class='mb-3'>
                                                <label for='house' class='form-label'>Namo numeris:</label>
                                                <input type='text' id='house' name='house' class='form-control' value='". $row['namo_numeris'] ."'>
                                            </div>
                                            <div class='mb-3'>
                                                <label for='flat' class='form-label'>Buto numeris:</label>
                                                <input type='text' id='flat' name='flat' class='form-control' value='". $row['buto_numeris'] ."'>
                                            </div>
                                            <div class='mb-3'>
                                                <label for='mailCode' class='form-label'>Pašto kodas:</label>
                                                <input type='text' id='mailCode' name='mailCode' class='form-control' value='". $row['pasto_kodas'] ."'>
                                            </div>
                                            </ul>
                                        </li>";
                                    }
                                    echo '</ul>';
                                }   
                            }
                            ?>

                            <!-- <div class="mb-3"> -->
                                <!-- <label for="country" class="form-label">Šalis:</label> -->
                                <?php /*echo '<input type="text" id="country" name="country" class="form-control" value="'. $_SESSION['name'] .'">';*/?>
                                <!-- <input type="text" id="country" name="country" class="form-control" value="Lietuva"> -->
                            <!-- </div> -->
                            <!-- <div class="mb-3"> -->
                                <!-- <label for="city" class="form-label">Miestas:</label> -->
                                <?php /*echo '<input type="text" id="city" name="city" class="form-control" value="'. $_SESSION['name'] .'">';*/?>
                                <!-- <input type="text" id="city" name="city" class="form-control" value="Kaunas"> -->
                            <!-- </div> -->
                            <!-- <div class="mb-3"> -->
                                <!-- <label for="street" class="form-label">Gatvė:</label> -->
                                <?php /*echo '<input type="text" id="street" name="street" class="form-control" value="'. $_SESSION['name'] .'">';*/?>
                                <!-- <input type="text" id="street" name="street" class="form-control" value="Studentų g."> -->
                            <!-- </div> -->
                            <!-- <div class="mb-3"> -->
                                <!-- <label for="house" class="form-label">Namas:</label> -->
                                <?php /*echo '<input type="text" id="house" name="house" class="form-control" value="'. $_SESSION['name'] .'">';*/?>
                                <!-- <input type="text" id="house" name="house" class="form-control" value="50"> -->
                            <!-- </div> -->
                            <!-- <div class="mb-3"> -->
                                <!-- <label for="mailCode" class="form-label">Pašto kodas:</label> -->
                                <?php /*echo '<input type="text" id="mailCode" name="" class="form-control" value="'. $_SESSION['name'] .'">';*/?>
                                <!-- <input type="text" id="mailCode" name="" class="form-control" value="12345"> -->
                            <!-- </div> -->
                            <button type="submit" name='submit' class="btn btn-primary">Išsaugoti pakeitimus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>
