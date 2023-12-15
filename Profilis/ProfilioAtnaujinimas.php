<?php
require '../dbConnection.php';
session_start();
echo "do smth before";

if(isset($_POST['submit']))
{
    echo "dn smth";
    $id = $_SESSION['id'];
    $name = mysqli_real_escape_string($db, $_POST['realName']);
    $surname = mysqli_real_escape_string($db, $_POST['lastname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $birth = mysqli_real_escape_string($db, $_POST['birth']);
    $country = mysqli_real_escape_string($db, $_POST['country']);
    $city = mysqli_real_escape_string($db, $_POST['city']);
    $street = mysqli_real_escape_string($db, $_POST['street']);
    $house = mysqli_real_escape_string($db, $_POST['house']);
    $flat = mysqli_real_escape_string($db, $_POST['flat']);
    $mailCode = mysqli_real_escape_string($db, $_POST['mailcode']);
    $sex = mysqli_real_escape_string($db, $_POST['sex']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);

    echo "do smth rn";

    $sql = "UPDATE klientai set vardas = '$name', pavarde = '$surname', lytis = '$sex', gimimo_data = '$birth', el_pastas = '$email', telefono_nr = '$phone' where idKlientas = '$id'";
    $result = mysqli_query($db, $sql);
    header('Location: ProfilioLangas.php');

    // $phone = mysqli_real_escape_string($db, $_POST['telefonas']);
    // $description = mysqli_real_escape_string($db, $_POST['aprasas']);
    // $age = mysqli_real_escape_string($db, $_POST['amzius']);
    // $gender = mysqli_real_escape_string($db, $_POST['lytis']);
    // $skype = mysqli_real_escape_string($db, $_POST['skype']);
    // $sql = "UPDATE profile SET name = '$name', surname = '$surname', phone_number = '$phone', description = '$description', age = $age, gender = $gender, skype = '$skype' WHERE fk_Userid = $id";
    // $result = mysqli_query($db, $sql);
    // header('Location: profile.php');
}
else{
    echo "its not set!";
}


?>