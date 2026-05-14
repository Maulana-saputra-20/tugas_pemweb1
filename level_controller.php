<?php

include_once 'koneksi.php';
include_once 'models/Level.php';

$obj = new Level();

$proses = $_REQUEST['proses'];

switch ($proses) {

    case 'simpan':

        $data = [
            $_POST['nama']
        ];

        $obj->simpan($data);

        break;

    case 'ubah':

        $data = [
            $_POST['nama'],
            $_POST['id']
        ];

        $obj->ubah($data);

        break;

    case 'hapus':

        $obj->hapus($_GET['id']);

        break;
}

header('location:index.php?hal=level_list');
