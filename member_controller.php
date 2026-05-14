<?php
session_start();

require_once 'koneksi.php';
require_once 'models/member.php';

$data = [
'username' => $_POST['username'],
'password' => $_POST['password']
];

$member = new Member($dbh);

$cek = $member->cekLogin($data);

if($cek){

$_SESSION['MEMBER'] = $cek;

header("location:index.php");

}else{

header("location:login.php");

}