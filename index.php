<?php
include 'templates/header.php';
include 'templates/menu.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {

    case 'about':
        include 'pages/about.php';
        break;

    case 'contact':
        include 'pages/contact.php';
        break;

    case 'level':
        include 'pages/level_list.php';
        break;

    case 'studies':
        include 'pages/studies_list.php';
        break;

    case 'login':
        include 'pages/login.php';
        break;

    default:
        include 'pages/home.php';
        break;
}

include 'templates/footer.php';
?>