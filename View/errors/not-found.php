<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap 5 404 Error Page</title>
    <?php
    include 'View/parts/styles.php'
    ?>
</head>

<body>
<div class="d-flex align-items-center justify-content-center vh-100 bg-secondary">
    <h1 class="display-1 fw-bold text-white mb-5 pb-5">404</h1>
    <a class="btn btn-success position-absolute mt-5" href="index.php?controller=bike&action=list">Retour à l'accueil</a>
</div>
<?php
include 'View/parts/scripts.php'
?>

</body>

</html>
