<?php
if(session_status() == PHP_SESSION_NONE)
{
    session_start();
}


if(!isset($_POST['kolicina']) || empty($_POST['kolicina']))
{
    die("Niste prosledili kolicinu proizvoda");
}

if(!isset($_POST['id_proizvoda']) || empty($_POST['id_proizvoda']))
{
    die("Niste prosledili ID proizvoda");
}

$kolicina = $_POST['kolicina'];
$id_proizvoda = $_POST['id_proizvoda'];
$id_korisnika = $_SESSION['id'];

require_once "baza.php";

$prevod = $baza->query("SELECT cena FROM proizvodi WHERE id = $id_proizvoda");

$red_cena = $prevod->fetch_assoc();

$cena = $red_cena['cena'];

$ukupna_cena = $cena * $kolicina;

$id_proizvoda = $baza->real_escape_string($id_proizvoda);
$id_korisnika = $baza->real_escape_string($id_korisnika);
$kolicina = $baza->real_escape_string($kolicina);
$ukupna_cena = $baza->real_escape_string($ukupna_cena);

$rezultat = $baza->query("INSERT INTO narudzbine (id_proizvoda, id_korisnika, cena, kolicina) VALUE ($id_proizvoda, $id_korisnika, $ukupna_cena, $kolicina)");


echo"Uspesno ste narucili proizvod/e. Hvala na saradnji.";

