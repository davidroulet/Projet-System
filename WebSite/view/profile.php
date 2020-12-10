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

<br>
    Ton Email = <?php echo  "$_SESSION[email]" ?>
<br>
    Ton Mot de passe = <?php echo  "$_SESSION[password]" ?>

<?php

$content = ob_get_clean();
require "gabarit.php";
?>