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