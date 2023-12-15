<?php
require "View/parts/function.php";
?>
<html>
<head>

    <?php include 'View/parts/styles.php'; ?>
</head>
<body>

<div class="container">
    <h1>Ajouter une Moto</h1>
    <a class="btn btn-success" href="index.php?controller=bike&action=list">Retour</a>

    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Marque de la moto</label>
            <input class="form-control <?php echo(displayBsClass('marque', $errors));?>"
                   name="marque" value="<?php echo(keepValue("marque"));?>" placeholder="Marque">

            <?php
            displayErrorMessage("marque", $errors);
            ?>

        </div>

        <div class="form-group">
            <label>Modèle de la moto</label>
            <input class="form-control <?php echo(displayBsClass('model', $errors));?>"
                   value="<?php echo(keepValue("model"));?>" name="model" placeholder="Modèle">


            <?php
            displayErrorMessage("model", $errors);
            ?>
        </div>

        <div class="mt-2 form-group <?php echo(displayBsClass("type", $errors)); ?>">
            <label>Type de moto</label>
            <br>
            <?php
            foreach (Bike::$allowedTypes as $type){
                $class = displayBsClass("type", $errors);
                $checked = '';
                if(array_key_exists("type", $_POST) && $type == $_POST["type"]){
                    $checked = "checked";
                }
                echo('  <div class="form-check form-check-inline">
                <input '.$checked.' class="form-check-input '.$class.'" type="radio" name="type" id="inlineRadio1" value="'.$type.'">
                <label class="form-check-label" for="inlineRadio1">'.$type.'</label>
            </div>');
            }
            ?>

        </div>

        <div class="form-group mt-2">
            <label>Photo (optionnel)</label>
            <input type="file" name="picture" class="form-control <?php echo(displayBsClass("picture", $errors)); ?>">
            <?php
            displayErrorMessage("picture", $errors);
            ?>
        </div>

        <input type="submit" class="btn btn-success mt-3">
    </form>

</div>
<?php include 'View/parts/scripts.php'; ?>
</body>
</html>
