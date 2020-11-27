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