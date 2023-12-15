<html>
<head>

    <?php include 'View/parts/styles.php'; ?>
</head>
<body>
<?php include 'View/parts/navbar.php'; ?>

<div class="container">
    <h1>Les motos !</h1>

    <?php
    if(count($bikes) == 0){
        echo('<h1 class="text-center text-danger">
                Il n\'y a pas de moto en base
                </h1>');
    } else {
        ?>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Model</th>
                <th scope="col">Marque</th>
                <th scope="col">Type</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($bikes as $bike){
                echo(' <tr>
                <th scope="row">'.$bike->getId().'</th>
                <td>'.$bike->getModel().'</td>
                <td>'.$bike->getMarque().'</td>
                <td>'.$bike->getType().'</td>
                <td>
                <a href="index.php?controller=bike&action=detail&id='.$bike->getId().'">Détail</a>
                <a href="index.php?controller=bike&action=delete&id='.$bike->getId().'">Supprimer</a>
                </td>
            </tr>');
            }
            ?>


            </tbody>
        </table>
        <?php
    }
    ?>

</div>
<?php include 'View/parts/scripts.php'; ?>
</body>
</html>
