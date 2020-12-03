<?php
/**
 * Created by PhpStorm.
 * User: David.ROULET
 * Date: 27.11.2020
 * Time: 14:54
 */

ob_start();
?>

    info
Ce si est un site Web pour des abos
<?php

$content = ob_get_clean();
require "gabarit.php";
?>