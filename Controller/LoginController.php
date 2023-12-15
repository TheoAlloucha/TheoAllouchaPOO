<?php
class LoginController {

    private $userManager;

    public function __construct(){
        $this->userManager = new UserManager();
    }

    public function login(){
        $errors = null;

        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            $errors = $this->isValidLoginForm();

            if(count($errors) == 0){
                $user = $this->userManager->getOneByUsername($_POST["username"]);

                if(!is_null($user) && password_verify($_POST["password"], $user->getPassword())){
                    $_SESSION['user']= serialize($user);
                    header("Location: index.php?controller=bike&action=list");
                } else {
                    $errors[] = "Identifiants incorrectes";
                }
            }

        }

        require "View/bikes/login.php";
    }


    public function logout(){
        session_destroy();
        header("Location: index.php?controller=login&action=login");
    }

    private function isValidLoginForm(){
        $errors = [];

        if(empty($_POST["username"])){
            $errors[] = "Veuillez saisir un nom d'utilisateur";
        }

        if(empty($_POST["password"])){
            $errors[] = "Veuillez saisir un mot de passe";
        }

        return $errors;
    }

}
