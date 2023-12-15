<?php

require "../dbConnection.php";
session_start();
if(!empty($_SESSION['username'])){
    ('Location: ../PagrindinisLangasPav.php');
}else{
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Prisijungimas</h2>
                        <form action=PrisijungimoLangas.php method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Naudotojo el. paštas:</label>
                                <input type="text" id="username" name="username" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Slaptažodis:</label>
                                <input type="password" id="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-success" name="login_user">Prisijungti</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>';
}
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        header("Location: PrisijungimoLangas.php");
    }
    if (empty($password)) {
        header("Location: PrisijungimoLangas.php");
    }

        $query = "SELECT * FROM klientai WHERE el_pastas='$username'";
        $results = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($results);
        if ($row['el_pastas'] === $username && password_verify($password, $row['password_hash'])) {
            $_SESSION['id'] = $row['idKlientas'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['name'] = $row['vardas'];
            $_SESSION['lastname'] = $row['pavarde'];
            $_SESSION['sex'] = $row['lytis'];
            $_SESSION['email'] = $row['el_pastas'];
            $_SESSION['phone'] = $row['telefono_nr'];
            $_SESSION['birthDate'] = $row['gimimo_data'];

            header('Location: ../PagrindinisLangasPav.php');
        }else {
            header("Location: PrisijungimoLangas.php");
        }
}
?>

