<?php
/**
 * Created by PhpStorm.
 * User: David.ROULET
 * Date: 27.11.2020
 * Time: 14:52
 */
ob_start();
?>
    <div class="container row">
        <div class="col-6">

            <?php foreach ($alreadysub as $alsub) {
                $data = getproductbyid($alsub["Products_id"])
                ?>
                <div>
                    Nom : <?php echo $alsub["name"] ?> | pack : <?php echo $data["name"] ?> | os : <?php echo $data["os"] ?> | RAM
                    : <?php echo $data["Ram"] ?> | CPU : <?php echo $data["CPU"] ?>| date
                    : <?php echo $alsub["datestart"] ?>|
                    Espace disk :  50go

                    <form>
                        <input type="hidden" name="action" value="remsub" >
                        <input type="hidden" name="subid" value="<?php echo $alsub["id"] ?>">
                        <button> Résilier</button>

                    </form>
                </div>
            <?php } ?>


        </div>
        <div class="col-6">
            <?php foreach ($datas as $data) {
                ?>
                <div> Nom : <?php echo $data["name"] ?> | os : <?php echo $data["os"] ?> | RAM
                    : <?php echo $data["Ram"] ?> | CPU : <?php echo $data["CPU"] ?>|
                    Espace disk :  50go


                    <form>
                        <input type="hidden" name="action" value="takesub" >
                        <input type="hidden" name="prod" value="<?php echo $data["id"] ?>">
                        <button type="submit"> Achter</button>
                        avec le nom
                        <input type="text" name="VMName" >


                    </form>

                </div>
            <?php } ?>

        </div>
    </div>

<?php

$content = ob_get_clean();
require "gabarit.php";
?>