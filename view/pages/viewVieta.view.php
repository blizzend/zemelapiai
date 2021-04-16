<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body class="bg-dark text-white">
    <?php include "view/_partials/nav.view.php"?>
        <div class="container text-center">
            <h1><?=$vieta['vardas']?></h1>
                <ul>
                    <img src="<?=$vieta['nuotrauka']?>" alt="..." class="w-25">
                    <li>Veikla: <?=$vieta['veikla']?></li>
                    <li>Apibudinimas:<?=$vieta['apibudinimas']?></li>
                    <li>Adresas: <?=$vieta['adresas']?></li>
                </ul>
                <a href="/delete-vietos/<?=$vieta['id']?>" class="btn btn-primary">Istrinti</a>
            </div>
      </body>
</html>