<?php

session_start();
require "controller/navigation.php";
require "controller/user.php";
require "controller/weapons.php";
require "controller/characters.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home' :
            home();
            break;
        case 'weapons':
            weapons();
            break;
        case 'maps' :
            maps();
            break;
        case 'characters' :
            characters();
            break;
        case 'game' :
            game();
            break;
        case 'forgetPassword':
            forgetPassword();
            break;
        case 'register':
            register($_POST);
            break;
        case 'login':
            login($_POST);
            break;
        case "logout":
            logout();
            break;
        default :
            lost();
    }
}
else {
    home();
}