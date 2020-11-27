<?php
/**
 * [Title]
 * User: [NAME]
 * Date: [DATE]
 */
ob_start();
?>

    Bienvenu Sur mon site Web Green-Pruple
<br>
    Bienvenu <?php echo  "$_SESSION[lastname]" ?>

    <div class="row m-4 d-flex justify-content-center">
        <a class="col-4 bigfont btn btn-primary btn-large  font-weight" href="?action=info">Info</a>
        <a class="col-4 bigfont btn btn-primary btn-large " href="?action=sub">Abonment</a>
        <a class="col-4 bigfont btn btn-primary btn-large " href="?action=profile">Profile</a>
    </div>

<?php

$content = ob_get_clean();
require "gabarit.php";
?>