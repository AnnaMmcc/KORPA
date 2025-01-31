<?php

if(!isset($_GET['id']) || empty($_GET['id']))
{
    echo" Nepostojeci ID";
}
require_once "functions/functions.php";

$proizvod = getProductByID($_GET['id']);


if(session_status() == PHP_SESSION_NONE)
{
    session_start();
}

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 
</head>

<body>


<?php require_once "navigacija.php" ?>

</div>

  <div class="mt-5 text-center">
    <h1><?= $proizvod['ime']; ?></h1>
    <p><?= $proizvod['opis']; ?> </p>
    <p>Cena proizvoda: <?= $proizvod['cena']; ?> </p>
    <p>Kolicina: <?= $proizvod['kolicina']; ?> </p>

   <?php if($proizvod['kolicina'] == 0) : ?>
    <p>Nema na stanju</p>
   <?php else:   ?>
    <p>Ima na stanju</p>
    <?php endif;  ?>

    <?php if(!isset($_SESSION['ulogovan'])): ?>
    <a class="btn btn-primary" href="ulogujme.php">Kliknite da se ulogujete kako biste dodali u korpu</a>
    <?php else : ?>
    <form method="POST" action="korpa.php">
    <input type="number" name="kolicina" placeholder="Unesite kolicinu proizvoda">
    <input type="hidden" name="id_proizvoda" value="<?= $proizvod['id'] ?>">
    <button class="btn btn-outline-primary">Dodaj u korpu</button>
    </form>
    <?php endif; ?>
   </div>
</body>

</html>


