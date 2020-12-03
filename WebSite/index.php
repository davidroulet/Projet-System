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

    case "info":
        info();
        break;

    case "profile":
        profile();
        break;
    case "supp":
        session_destroy();
        require_once "view/home.php";
        break;
    default:
        require_once "view/home.php";
        break;
}
?>