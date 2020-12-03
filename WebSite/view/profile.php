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

    Ton Nom = <?php echo  "$_SESSION[lastname]" ?>
<br>
    Ton Prenom = <?php echo  "$_SESSION[firstname]" ?>
<br>
    Ton Mot de passe = <?php echo  "$_SESSION[password]" ?>

<?php

$content = ob_get_clean();
require "gabarit.php";
?>