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
if (isset($_POST['email']) && isset($_POST['password'])) {
    $password = $_POST['password'];
    $email = $_POST["email"];
}

if (isset($_GET['nameprod'])) {
    $nameprod = $_GET['nameprod'];
    $osprod = $_GET["osprod"];
    $ramprod = $_GET['ramprod'];
    $cpuprod = $_GET["cpuprod"];

}

if (isset($_POST['emailnew']) && isset($_POST['passwordnew'])) {
    $passwordnew = $_POST['passwordnew'];
    $emailnew = $_POST["emailnew"];
}
if (isset($_GET['prod'])) {
    $prod = $_GET['prod'];
}
if (isset($_GET['CARN'])) {
    $CARN = $_GET['CARN'];
}
if (isset($_GET['sshco'])) {
    $sshco = $_GET['sshco'];
}
if (isset($_GET['listusbuser'])) {
    $listusbuser = $_GET['listusbuser'];
}
if (isset($_GET['subid'])) {
    $subid = $_GET['subid'];
}
if (isset($_GET['showsubinfoid'])) {
    $showsubinfoid = $_GET['showsubinfoid'];
}

if (isset($_GET['VMName'])) {
    $VMName = $_GET['VMName'];
}

switch ($action) {

    case 'home':
        home();
        break;

    case 'newprod':
        newprod($nameprod, $ramprod, $osprod, $cpuprod);
        break;

    case "sshco":

        $connection = ssh2_connect('10.229.42.213', 22);
        ssh2_auth_password($connection, 'root', 'Pa$$w0rd');

        $stream = ssh2_exec($connection, 'sh /script/Ascript.sh');
        stream_set_blocking($stream, true);
        $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
        $output = stream_get_contents($stream_out);
        $sshco = $output;
        adminP($SSH, $sshco);


        break;
    case 'ssh':

        $connection = ssh2_connect('10.229.42.213', 22);
        if (ssh2_auth_password($connection, 'root', 'Pa$$w0rd')) {
            $SSH = "ok";
        } else {
            $SSH = "pas ok";
        }
        adminP($SSH, $sshco,$CARM);
        break;
    case 'CAR':
echo "excution du script";
        $script ="sh /script/create.sh $CARN";
        $connection = ssh2_connect('10.229.42.213', 22);
        ssh2_auth_password($connection, 'root', 'Pa$$w0rd');

        $stream = ssh2_exec($connection, $script);
        stream_set_blocking($stream, true);
        $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
        $output = stream_get_contents($stream_out);
        $CARID = $output;
        echo "fin de l'execution du script";
        adminP($SSH, $sshco,$CARID);

        break;
    case "trylogin":
        trylogin($email, $password);
        break;
    case "newuser":
        newuser($emailnew, $passwordnew);
        break;

    case "login":
        login();
        break;
    case "adminP":
        adminP($SSH, $sshco,$CARM);
        break;
    case "sub":
        sub();
        break;

    case "remsub":
        remsub($subid);
        break;

    case "showsubinfo":
        showsubinfo($showsubinfoid);
        break;
    case "remsubA":
        remsubA($subid);
        break;
    case "info":
        info();
        break;

    case "listusbuser":
        listusbuser($listusbuser);
        break;
    case "takesub":
        takesub($prod, $VMName);
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
        if (isset($_SESSION["id"])) {
            login();
        } else {
            require_once "view/home.php";
        }

        break;
}
?>