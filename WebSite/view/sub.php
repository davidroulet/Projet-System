<?php
/**
 * Created by PhpStorm.
 * User: David.ROULET
 * Date: 27.11.2020
 * Time: 14:52
 */
ob_start();
?>

Abo
<br>
    <?php foreach($datas as $data){
  ?>
Nom :     <?php echo $data["name"] ?>  | os :     <?php echo $data["os"] ?>  | RAM :     <?php echo $data["Ram"] ?> | CPU :     <?php echo $data["CPU"] ?> <a class="col-4 bigfont btn btn-primary btn-large " href="?action=supp">Achter 1 mois</a>

    <br>
    <?php } ?>


<?php

$content = ob_get_clean();
require "gabarit.php";
?>