<?php
if(session_status() == PHP_SESSION_NONE)
{
    session_start();
}

?>

<div class="col-12 bg-dark p-2 d-flex justify-content-center align-items-center">
<div class="m-2">
<a class="nav-link" href="nasiproizvodi.php">GLAVNA</a>
</div>

<div>
 <?php if(!isset($_SESSION['ulogovan'])): ?>
 <a class="text-white" href="ulogujme.php">LOG IN</a>
<?php else :  ?>
 <a class="text-white" href="logout.php">LOG OUT</a>
 <a class="text-white" href="mojakorpa.php">KORPA</a>
<?php endif; ?>
</div>
</div>