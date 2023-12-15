<html>
<head>
    <?php include 'View/parts/styles.php'; ?>
</head>
<body>
<div class="container">
    <h1>Page de Connexion</h1>

    <form method="post" action="index.php?controller=login&action=login">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Entrez un nom d'utilisateur">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Connexion</button>

    </form>

    <?php
    if(!is_null($errors)){
        foreach ($errors as $error){
            echo '<div class="alert alert-danger" role="alert">
  '.$error.'
</div>';
        }
    }
    ?>

</div>

<?php include 'View/parts/scripts.php'; ?>
</body>
</html>
