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
function getuserbyname($firstname,$lastname){
    return selectOne("SELECT * FROM users where firstname= :firstname and lastname = :lastname;",['lastname' => $lastname,'firstname' => $firstname]);

}
function getsubscribbyuser($userid)
{
    return selectMany("SELECT * FROM greenpurple.abonment where Users_id=:id;", ['id'=>$userid]);
}
function getproductbyid($prodid)
{
    return selectOne("SELECT * FROM products where id=:id;", ['id'=>$prodid]);
}


function modelremovesub($subid)
{
    return execute("DELETE FROM greenpurple.abonment where id=:id;", ['id'=>$subid]);
}


function addsub($userid,$prodid,$VMName)
{
    return insert("INSERT INTO abonment(Users_id,Products_id,datestart,Name) VALUES (:userid,:pordid,now(),:VMName)", ['userid'=>$userid,'pordid'=>$prodid,'VMName'=>$VMName]);

}
// return execute("DELETE FROM todosheet WHERE id=:id", ["id" => $id]);


