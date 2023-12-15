<?php
class BikeManager extends DbManager{
    public function getAll(){
        $query = $this->bdd->query("SELECT * FROM motos");
        $resultsArray = $query->fetchAll();

        $objectArray = [];

        foreach ($resultsArray as $result){
            $objectArray[] = new Bike(
                $result["id"], $result["model"], $result["type"],
                $result["picture"], $result["mark"]);
        }

        return $objectArray;
    }

    public function insert(Bike $bike)
    {
        var_dump($bike);
        $query = $this->bdd->prepare("INSERT INTO motos (model, type, picture , mark) VALUES (:model, :type, :picture , :marque)");

        $query->execute(
            [
                "model"=> $bike->getModel(),
                "type" => $bike->getType(),
                "picture"=> $bike->getPicture(),
                "marque"=> $bike->getMarque()

            ]
        );
    }

    public function getOne($id)
    {
        $query = $this->bdd->prepare("SELECT * FROM motos WHERE id = :id");

        $query->execute([
            "id"=> $id
        ]);

        $result = $query->fetch();


        $object = null;

        if($result){
            $object = new Bike(
                $result["id"], $result["model"], $result["type"],
                $result["picture"], $result["mark"]);
        }


        return $object;
    }

    public function delete($id)
    {
        $query = $this->bdd->prepare("DELETE FROM motos WHERE id = :id");
        $query->execute([
            "id"=> $id
        ]);
    }
}
