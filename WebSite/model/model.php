<?php

function getuser()
{
    return selectMany("SELECT * FROM users", []);
}
function getproduct()
{
    return selectMany("SELECT * FROM products", []);
}
function getsubscribe()
{
    return selectMany("SELECT * FROM abonment", []);
}
function getuserbyemail($email){
    return selectOne("SELECT * FROM users where email= :email;",['email' => $email]);

}
function getsubscribbyuser($userid)
{
    return selectMany("SELECT * FROM greenpurple.abonment where Users_id=:id;", ['id'=>$userid]);
}
function getproductbyid($prodid)
{
    return selectOne("SELECT * FROM products where id=:id;", ['id'=>$prodid]);
}

function getnumberorsubbyprod($prodid)
{
    return selectOne("SELECT COUNT(*) FROM abonment where Products_id =:id;", ['id'=>$prodid]);
}
function modelremovesub($subid)
{
    return execute("DELETE FROM greenpurple.abonment where id=:id;", ['id'=>$subid]);
}


function AddProducte($nameprod,$ramprod,$osprod,$cpuprod)
{

    return insert("INSERT INTO products(name,os,Ram,CPU) VALUES (:packname,:os,:ram,:pross)", ['packname'=>$nameprod,'os'=>$osprod,'ram'=>$ramprod,'pross'=>$cpuprod]);
}





function adduser($email,$password){
    return insert("INSERT INTO users(email,password) VALUES (:email,:password)", ['password'=>$password,'email'=>$email]);
}


function addsub($userid,$prodid,$VMName)
{
    return insert("INSERT INTO abonment(Users_id,Products_id,datestart,Name) VALUES (:userid,:pordid,now(),:VMName)", ['userid'=>$userid,'pordid'=>$prodid,'VMName'=>$VMName]);

}
// return execute("DELETE FROM todosheet WHERE id=:id", ["id" => $id]);


