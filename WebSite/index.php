<?php
/**
 * [Title]
 * User: [NAME]
 * Date: [DATE]
 */


require "controler/controler.php";
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "home";
}

switch ($action) {
    case 'home':
        home();
        break;
    default:
        require_once "view/home.php";
        break;
}
?>