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

        <label for="nom">Nom</label>
        <input id="nom" type="text" class="form" name="nom" required>

        <label for="prenom">Prenom</label>
        <input id="prenom" type="text" class="form" name="prenom" required>

        <label for="password">Mot de passe</label>
        <input id="password" type="password" class="form" name="password" required>

        <button type="submit" id="btnLogin" class="btn btn-primary">Connecter</button>
    </form>

<?php

$content = ob_get_clean();
require "gabarit.php";
?>