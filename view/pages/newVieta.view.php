<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body class="bg-dark">
    <?php include "view/_partials/nav.view.php"?>
        <div class="container text-center w-25 ">
            <h1 class="text-white">Naujos Vietos pridejimas</h1>
            <form method="post">
                <div class="form-group p-2">
                    <input type="text" name="vardas" class="form-control "  placeholder="Vietos Pavadinimas">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="veikla" class="form-control"  placeholder="Vietos Veikla">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="adresas" class="form-control"  placeholder="Vietos adresas">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="apibudinimas" class="form-control"  placeholder="Vietos apibudinimas">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="nuotrauka" class="form-control"  placeholder="Nuotraukos adresas">
                </div>
                <div class="text-center">
                    <button type="submit" name="send" class="btn btn-secondary border border-white border border-2 mt-3">Pridėti</button>
                </div>
            </form>
        </div>
    </body>
</html>
