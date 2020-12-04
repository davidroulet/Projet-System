<?php
session_start();
/**
 * [Title]
 * User: [NAME]
 * Date: [DATE]
 */

require "model/database.php";
require "controler/controler.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "home";
}
if (isset($_POST['nom']) && isset($_POST['password'])) {
    $nom = $_POST['nom'];
    $password = $_POST['password'];
    $prenom = $_POST["prenom"];

}
if (isset($_GET['prod'])) {
    $prod = $_GET['prod'];
}

if (isset($_GET['subid'])) {
    $subid = $_GET['subid'];
}

switch ($action) {
    case 'home':
        home();
        break;

    case "trylogin":
        trylogin($prenom, $nom, $password);
        break;

    case "login":
        login();
        break;

    case "sub":
        sub();
        break;

    case "remsub":
        remsub($subid);
        break;

    case "info":
        info();
        break;

    case "takesub":
        takesub($prod);
        break;
    case "profile":
        profile();
        break;
    case "supp":
        session_destroy();
        session_start();
        home();
        break;
    default:
        require_once "view/home.php";
        break;
}
?>