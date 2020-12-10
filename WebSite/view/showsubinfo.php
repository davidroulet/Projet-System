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

    <div> Nom : <?php echo $data["name"] ?> | os : <?php echo $data["os"] ?> | RAM
        : <?php echo $data["Ram"] ?> | CPU : <?php echo $data["CPU"] ?> |
        number :  <?php echo $numbersub["COUNT(*)"] ?>


    </div>


<?php
/*
 *
       <form>
            <input type="hidden" name="action" value="takesub" >
            <input type="hidden" name="prod" value="<?php echo $data["id"] ?>">
            <button type="submit"> Achter</button>
            avec le nom
            <input type="text" name="VMName" >
        </form>

 */
$content = ob_get_clean();
require "gabarit.php";
?>