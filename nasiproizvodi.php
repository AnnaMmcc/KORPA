<?php
require_once "baza.php";

$rezultat = $baza->query("SELECT * FROM proizvodi");

$proizvodi = $rezultat->fetch_all(MYSQLI_ASSOC);


if(session_status() == PHP_SESSION_NONE)
{
    session_start();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>PROIZVODI</title>
</head>
<body>

 <?php require_once "navigacija.php" ?>

  <div class="container d-flex flex-wrap">
            <?php foreach($proizvodi as $proizvod): ?>
                <div class="col-md-4 col-12  p-2 mt-2">
                    <h1><?= $proizvod['ime'] ?></h1>
                    <p><?= $proizvod['opis'] ?></p>
                    <p>Cena proizvoda: <?= $proizvod['cena'] ?></p>
                    <p>Na stanju: <?= $proizvod['kolicina'] ?></p>

                    <?php if($proizvod['kolicina'] == 0): ?>
                        <p>Nema na stanju</p>
                    <?php else: ?>
                        <p>Ima na stanju</p>
                    <?php endif; ?>

                    <a class="btn btn-outline-primary" href="pogledajproizvod.php?id=<?= $proizvod['id'] ?>">Pogledaj proizvod</a>
                </div>
            <?php endforeach; ?>
        </div>

</body>
</html>