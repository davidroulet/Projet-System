<?php
/**
 * [Title]
 * User: [NAME]
 * Date: [DATE]
 */
require_once 'model/model.php';

function trylogin($email, $password)
{
    $data = getuserbyemail($email);
    if ($data["password"] == $password) {
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;
        $data = getuserbyemail($email);
        $_SESSION["id"] = $data["id"];
        require_once 'view/login.php';

    } else {
        require_once 'view/home.php';
    }

}

function newuser($email, $password)
{
    adduser($email, $password);
    trylogin($email, $password);
}

function adminP($SSH,$sshco,$CARID)
{

    $prods = getproduct();
    $users = getuser();
    require_once 'view/AdminP.php';
}

function login()
{
    require_once 'view/login.php';
}

function home()
{
    require_once 'view/home.php';
}

function info()
{
    require_once 'view/info.php';
}

function sub()
{
    $datas = getproduct();
    $alreadysub = getsubscribbyuser($_SESSION["id"]);
    require_once 'view/sub.php';
}

function profile()
{

    require_once 'view/profile.php';
}

function remsub($subid)
{

    modelremovesub($subid);
    $url = 'http://' . $_SERVER['HTTP_HOST'] . "?action=sub";
    header("Location: $url");
}

function remsubA($subid)
{

    modelremovesub($subid);
    $url = 'http://' . $_SERVER['HTTP_HOST'] . "?action=adminP";
    header("Location: $url");
}

function takesub($prod, $VMName)
{

    addsub($_SESSION["id"], $prod, $VMName);
    $url = 'http://' . $_SERVER['HTTP_HOST'] . "?action=sub";
    header("Location: $url");

}


function showsubinfo($showsubinfoid)
{
    $numbersub = getnumberorsubbyprod($showsubinfoid);
    $data = getproductbyid($showsubinfoid);

    require_once 'view/showsubinfo.php';
}

function listusbuser($listusbuser)
{
    $datas = getsubscribbyuser($listusbuser);
    require_once 'view/listusbuser.php';
}
function newprod($nameprod,$ramprod,$osprod,$cpuprod){

    AddProducte($nameprod,$ramprod,$osprod,$cpuprod);

    $prods = getproduct();
    $users = getuser();

    $url = 'http://' . $_SERVER['HTTP_HOST'] . "?action=adminP";
    header("Location: $url");

}