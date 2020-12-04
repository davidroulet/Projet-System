<?php
/**
 * [Title]
 * User: [NAME]
 * Date: [DATE]
 */
require_once 'model/model.php';
function trylogin($prenom,$nom, $password){


    $data = getuserbyname($prenom,$nom);
if($data["password"]==$password){
    $_SESSION["lastname"]=$nom;
    $_SESSION["firstname"]=$prenom;
    $_SESSION["password"]=$password;
    $data=getuserbyname($prenom,$nom);
    $_SESSION["id"]=$data["id"];
    require_once 'view/login.php';

}else{
    require_once 'view/home.php';
}

}
function login(){
    require_once 'view/login.php';
}
function home()
{
    require_once 'view/home.php';
}
function info(){
    require_once 'view/info.php';
}
function sub(){
    $datas=getproduct();
    $alreadysub = getsubscribbyuser($_SESSION["id"]);
    require_once 'view/sub.php';
}
function profile(){

    require_once 'view/profile.php';
}
function remsub($subid){

    modelremovesub($subid);
    $url = 'http://'.$_SERVER['HTTP_HOST']."?action=sub";
    header("Location: $url");
}
function takesub($prod,$VMName){

    addsub($_SESSION["id"],$prod,$VMName);
    $url = 'http://'.$_SERVER['HTTP_HOST']."?action=sub";
    header("Location: $url");

}