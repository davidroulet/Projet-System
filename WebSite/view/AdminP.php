<?php
/**
 * Created by PhpStorm.
 * User: David.ROULET
 * Date: 27.11.2020
 * Time: 14:54
 */

ob_start();
?>

Page d'adminisatation
<br>
Liste des Produits:
   <div class="col-6">
            <?php foreach ($prods as $data) {
                ?>
                <div> Nom : <?php echo $data["name"] ?> | os : <?php echo $data["os"] ?> | RAM
                    : <?php echo $data["Ram"] ?> | CPU : <?php echo $data["CPU"] ?>
                </div>
                <form>
                    <input type="hidden" name="action" value="showsubinfo" >
                    <input type="hidden" name="showsubinfoid" value="<?php echo $data["id"] ?>">
                    <button> Voir les infos</button>
                </form>
            <?php } ?>
        </div>


    <form method="get">
        <input type="text" name="nameprod" value="Name">
        <input type="text" name="osprod" value="Os">
        <input type="text" name="ramprod" value="Ram">
        <input type="text" name="cpuprod" value="Cpu">
        <input type="hidden" name="action" value="newprod" >
        <button type="submit">Nouveaux produit</button>
    </form>
    <br>
    Liste des Clients:
    <div class="col-6">
        <?php foreach ($users as $data) {
            ?>
            <div> Email : <?php echo $data["email"] ?> | Password : <?php echo $data["password"] ?>
                <form>
                    <input type="hidden" name="action" value="listusbuser" >
                    <input type="hidden" name="listusbuser" value="<?php echo $data["id"] ?>">
                    <button type="submit"> Consulter les abos</button>
                </form>
            </div>
        <?php } ?>
    </div>
    <br>



<?php

$content = ob_get_clean();
require "gabarit.php";
?>