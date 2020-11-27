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



<?php
$content = ob_get_clean();
require "gabarit.php";
?>