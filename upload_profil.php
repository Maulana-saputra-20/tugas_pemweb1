<?php

session_start();

if (isset($_FILES['foto'])) {

    $nama_file = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    move_uploaded_file($tmp, 'uploads/' . $nama_file);

    $_SESSION['foto_profile'] = $nama_file;
}

header('location:index.php');