<?php
/**

 * Created by PhpStorm.
 * User: David.ROULET
 * Date: 27.11.2020
 * Time: 14:52
 */
ob_start();
?>

    profile
    Ton prenom = <?php echo "$data[firstname]" ?>
    Ton Nom = <?php echo "$data[lastname]" ?>
    Ton Mot de passe = <?php echo "$data[password]" ?>
<?php

$content = ob_get_clean();
require "gabarit.php";
?>