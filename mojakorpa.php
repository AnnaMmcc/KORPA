<?php

if(session_status() == PHP_SESSION_NONE)
{
    session_start();
}

if(!isset($_SESSION['ulogovan']))
{
    die("Morate biti ulogovani da bi videli ovu stranicu");
}

require_once "baza.php";

$id_korisnika = $_SESSION['id'];


$rezultat = $baza->query("SELECT * FROM narudzbine WHERE id_korisnika = $id_korisnika ");

$narudzbine = $rezultat->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Document</title>

</head>

<body>
    <?php if($rezultat->num_rows == 0): ?>
     <h1>Nemate ni jedan proizvod u korpi</h1>
    <?php else: ?>

   <?php foreach($narudzbine as $narudzba) :?>
    <div class="d-flex align-items-center justify-content-center mt-3">
   <table class="table text-center table-bordered border-primary" style="width: 300px;">
    <thead>
      <th scope="col">Kolicina:</th>
      <th scope="col">Cena:</th>
    </thead>
    <tbody>
        <td scope="row"><?= $narudzba['kolicina'] ?></td>
        <td scope="row"><?= $narudzba['cena'] ?></td>
   </tbody>
   </table>
   </div>
   <?php endforeach; ?>

    <?php endif; ?>
</body>

</html>