<?php
/**

 * Created by PhpStorm.
 * User: David.ROULET
 * Date: 27.11.2020
 * Time: 14:52
 */
ob_start();

?>

    Liste des abos pour  <?php echo $listusbuser ?>


    <div class="col-6">

        <?php foreach ($datas as $alsub) {
            $data = getproductbyid($alsub["Products_id"])
            ?>
            <div>
                Nom : <?php echo $alsub["name"] ?> | pack : <?php echo $data["name"] ?> | os : <?php echo $data["os"] ?> | RAM
                : <?php echo $data["Ram"] ?> | CPU : <?php echo $data["CPU"] ?>| date
                : <?php echo $alsub["datestart"] ?>

                <form>
                    <input type="hidden" name="action" value="remsubA" >
                    <input type="hidden" name="subid" value="<?php echo $alsub["id"] ?>">
                    <button> Résilier</button>

                </form>
            </div>
        <?php } ?>


    </div>



<?php

$content = ob_get_clean();
require "gabarit.php";
?>