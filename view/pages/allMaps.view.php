<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body class="bg-dark text-white">
    <?php include "view/_partials/nav.view.php"?>
            <h1 class="text-white text-center">Visos Vietos</h1>
            <div class="text-center">
            <form method="post">
            <input type="text" name="search" placeholder="Vietos paieska">
            <button type="submit" name="send">Ieskoti</button>
            </form>
    </div>
            <table class="table text-white">
                <thead>
                    <tr>
                        <th scope="col">Pavadinimas</th>
                        <th scope="col">Adresas</th>
                        <th scope="col">Veikla</th>
                    </tr>
                </thead>
            <tbody>
            <?php foreach($vietos->allVietos($page) as $vieta): ?>
                <tr>
                    <th scope="row"><a href="/vieta/<?=$vieta['id']?>" style="text-decoration: none;"><?=$vieta['vardas']?></a></th>
                    <td><?=$vieta['adresas']?></td>
                    <td><?=$vieta['veikla']?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php if($page != 1): ?>
                    <li class="page-item"><a class="page-link" href="/all/<?=$page-1?>">Atgal</a></li>
                    <?php endif ?>
                    <li class="page-item"><a class="page-link" href="/all/<?=$page+1?>">Toliau</a></li>
                </ul>
                </nav>
    </body>
</html>