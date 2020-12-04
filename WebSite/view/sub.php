<?php
/**
 * Created by PhpStorm.
 * User: David.ROULET
 * Date: 27.11.2020
 * Time: 14:52
 */
ob_start();
?>

Abo Disponible
<br>
    <?php foreach($datas as $data){
  ?>
Nom :     <?php echo $data["name"] ?>  | os :     <?php echo $data["os"] ?>  | RAM :     <?php echo $data["Ram"] ?> | CPU :     <?php echo $data["CPU"] ?> <a class="col-4 bigfont btn btn-primary btn-large " href="?action=takesub&prod=<?php echo$data["id"] ?>">Achter 1 mois</a>

    <br>
    <?php } ?>
<br>
<br>
Deja Abonné
<br>
<?php foreach($alreadysub as $alsub){

    $data=getproductbyid($alsub["Products_id"])
    ?>
    Nom :     <?php echo $data["name"] ?>  | os :     <?php echo $data["os"] ?>  | RAM :     <?php echo $data["Ram"] ?> | CPU :     <?php echo $data["CPU"] ?>| date :     <?php echo $alsub["datestart"] ?> <a class="col-4 bigfont btn btn-primary btn-large " href="?action=remsub&subid=<?php echo$alsub["id"] ?>">Résilier</a>

    <br>
<?php } ?>

<?php

$content = ob_get_clean();
require "gabarit.php";
?>