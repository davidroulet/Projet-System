<?php
/**
 * [Title]
 * User: [NAME]
 * Date: [DATE]
 */
ob_start();
?>

<?php

$content = ob_get_clean();
require "gabarit.php";
?>