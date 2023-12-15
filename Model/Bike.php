<?php
class Bike{

    public static $allowedTypes = ["Enduro", "Custom",
        "Sportive", "Roadster"];

    private $id;
    private $model;
    private $type;
    private $picture;
    private $marque;


    public function __construct($id, $model, $type, $picture, $marque){
        $this->id = $id;
        $this->model = $model;
        $this->type = $type;
        $this->picture = $picture;
        $this->marque = $marque;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getMarque(){
        return htmlentities($this->marque);
    }

    public function getModel()
    {
        return htmlentities($this->model);
    }

    public function setModel($model): void
    {
        $this->model = $model;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type): void
    {
        $this->type = $type;
    }

    public function getPicture()
    {
        return htmlspecialchars($this->picture);
    }

    public function setPicture($picture): void
    {
        $this->picture = $picture;
    }


}
