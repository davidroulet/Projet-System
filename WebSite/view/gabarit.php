<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="css\gabarit.css">
    <link rel="stylesheet" href="css\bootstrap.css">
</head>

<?php if(isset($_SESSION["firstname"])) {  ?>




    Bienvenu Sur mon site Web Green-Pruple
    <br>
    Bienvenu <?php echo  "$_SESSION[lastname]" ?>

    <div class="row m-4 d-flex justify-content-center">
        <a class="col-4 bigfont btn btn-primary btn-large  font-weight" href="?action=info">Info</a>
        <a class="col-4 bigfont btn btn-primary btn-large " href="?action=sub">Abonment</a>
        <a class="col-4 bigfont btn btn-primary btn-large " href="?action=profile">Profile</a>
        <a class="col-4 bigfont btn btn-primary btn-large " href="?action=supp">Se Deconnecter</a>
    </div>


<?php }?>

<body>
<?= $content ?>
</body>
</html>