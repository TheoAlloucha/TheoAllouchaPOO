<?php
class UserManager extends DbManager{

    public function getOneByUsername($username){
        $user = null;

        $query = $this->bdd->prepare("SELECT * FROM users WHERE username = :username");
        $query->execute([
            "username"=> $username
        ]);

        $result = $query->fetch();

        if($result){
            $user = new User($result["id"], $result["username"], $result["password"]);
        }

        return $user;
    }
}
?>
