<html>
<head>

    <?php include 'View/parts/styles.php'; ?>
</head>
<body>

<div class="container">
    <h1>La Moto <?php echo($bike->getModel());?></h1>
    <a class="btn btn-success" href="index.php?controller=bike&action=list">Retour</a>


    <div class="picture">
        <?php
        $img = $bike->getPicture();
        if(!empty($img)){
            echo('<img class="img img-thumbnail" src="Public/uploads/'.$img.'">');
        } else {
            echo('<img class="img img-thumbnail" src="Public/images/no-picture.jpg">');
        }
        ?>
    </div>

    <ul>
        <li>Marque : <?php echo($bike->getMarque()); ?></li>
        <li>Model : <?php echo($bike->getModel()); ?></li>
        <li>Type : <?php echo($bike->getType()); ?></li>
    </ul>
</div>
<?php include 'View/parts/scripts.php'; ?>
</body>
</html>
