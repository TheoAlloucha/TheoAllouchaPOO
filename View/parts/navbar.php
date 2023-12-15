<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php?controller=bike&action=list">Tout les Types</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php
                $array = [];
                foreach ($bikes as $bike){
                    $key = $bike->getType();
                    if(!array_key_exists($key,$array)){
                        $array[$key] = $key;
                        echo ('<li class="nav-item">
                    <a class="nav-link" href="index.php?controller=bike&action=listby&type='.$bike->getType().'">'.$bike->getType().'</a>
                </li>');
                    }
                }
                if (!empty($_SESSION['user'])) {
                    echo('<li class="nav-item">
                    <a class="btn btn-danger m-1" href="index.php?controller=login&action=logout">Me Déconnecter</a>
                </li>');}
                ?>
                <a class="btn btn-success m-1" href="index.php?controller=bike&action=add">Ajouter une moto</a>

            </ul>
        </div>
    </div>
</nav