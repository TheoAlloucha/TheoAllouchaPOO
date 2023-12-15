<?php
class BikeController{

    private $bikeManager;

    public function __construct(){
        $this->bikeManager = new BikeManager();
    }
    public function list(){
        $bikes =$this->bikeManager->getAll();

        require "View/bikes/list.php";
    }
    public function listby(){
        $bikes =$this->bikeManager->getAll();

        require "View/bikes/listby.php";
    }

    public function add(){
        $errors = [];

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $errors = $this->isValid();

            if(count($errors) == 0){
                $bike = new Bike(null, $_POST["model"], $_POST["type"],"", $_POST["marque"]);

                if($_FILES["picture"]["size"] != 0){
                    $filename = uniqid().$_FILES["picture"]['name'];
                    $bike->setPicture($filename);
                    move_uploaded_file($_FILES["picture"]["tmp_name"], "Public/uploads/".$filename);
                }

                $this->bikeManager->insert($bike);
                header("Location: index.php?controller=bike&action=list");
            }
        }

        require "View/bikes/form.php";
    }

    private function isValid(){
        $errors = [];

        if(empty($_POST["marque"])){
            $errors["marque"] = "Veuillez saisir une marque";
        } else if(strlen($_POST["marque"])>250){
            $errors["marque"] = "La marque est trop longue (250 caractères)";
        }

        if(empty($_POST["model"])){
            $errors["model"] = "Veuillez saisir un modèle";
        } else if(strlen($_POST["model"])>250){
            $errors["model"] = "Le modèle est trop long (250 caractères)";
        }

        if(empty($_POST["type"])){
            $errors["type"] = "Veuillez selectionner le type";
        } else if(!in_array($_POST["type"], Bike::$allowedTypes)){
            $errors["type"] = "Ce type n'existe pas";
        }

        if(array_key_exists("picture", $_FILES)){
            $image = $_FILES["picture"];
            $allowedFormat = ["image/jpeg", "image/png"];

            if($image["size"]>0){
                if(!in_array($image["type"], $allowedFormat)){
                    $errors["picture"] = "L'image n'est pas au bon format";
                }

                if($image["size"]> 250000000){
                    $errors["picture"] = "Le fichier est trop gros";
                }

                if($image["error"] != 0 && $image["error"] != 4){
                    $errors["picture"] = "Une erreur inconnue s'est produite";
                }
            }

        }

        return $errors;
    }

    public function detail($id)
    {
        $bike = $this->bikeManager->getOne($id);

        require 'View/bikes/detail.php';
    }

    public function delete($id)
    {
        $this->bikeManager->delete($id);
        header("Location: index.php?controller=bike&action=list");
    }
}
