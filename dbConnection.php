<?php

$db = mysqli_connect('localhost', 'root', '', 'fisk');
if($db === false){
    die("Neprisijungta " . mysqli_connect_error());
}
?>