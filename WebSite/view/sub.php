<?php
/**
 * Created by PhpStorm.
 * User: David.ROULET
 * Date: 27.11.2020
 * Time: 14:52
 */
ob_start();
?>

Sub

<?php

$content = ob_get_clean();
require "gabarit.php";
?>