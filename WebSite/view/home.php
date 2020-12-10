<?php
/**
 * [Title]
 * User: [NAME]
 * Date: [DATE]
 */
ob_start();
?>

Bienvenu Sur mon site Web Green-Pruple
Connecte toi!
    <form action="/?action=trylogin" method="post" class="form">

        <label for="email">email</label>
        <input id="email" type="text" class="form" name="email" required>


        <label for="password">Mot de passe</label>
        <input id="password" type="password" class="form" name="password" required>

        <button type="submit" id="btnLogin" class="btn btn-primary">Connecter</button>
    </form>
Inscrit toi!
    <form action="/?action=newuser" method="post" class="form">

        <label for="emailnew">email</label>
        <input id="emailnew" type="text" class="form" name="emailnew" required>


        <label for="passwordnew">Mot de passe</label>
        <input id="passwordnew" type="passwordnew" class="form" name="passwordnew" required>

        <button type="submit" id="btnLogin" class="btn btn-primary">s'inscrire</button>
    </form>
<?php

$content = ob_get_clean();
require "gabarit.php";
?>