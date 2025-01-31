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
<form method="POST" action="uloguj.php">
  <div class="container container d-flex flex-wrap justify-content-center align-items-center flex-column">
    <div class="mb-3 col-md-4 col-12 mt-3">
    <label for="email" class="form-label">Email adresa:</label>
    <input class="form-control" type="email" name="email" placeholder="Unesite vas email" id="email" required>
    </div>
    <div class="mb-3 col-md-4 col-12 mt-3">
    <label for="sifra" class="form-label">Lozinka:</label>
    <input class="form-control" type="password" name="sifra" placeholder="Unesite vasu lozinku" id="sifra" required>
    <button class="btn btn-primary mt-3">Uloguj me</button>
    </div> 
  </div> 
</form>

</html>