<?php
session_start();
require "loader.php";

if (!isset($_SESSION["user"]) && $_GET["controller"] != "login") {
    header("Location: index.php?controller=login&action=login");
    exit;
}

if(empty($_GET)){
    header("Location: index.php?controller=login&action=login");
    exit;
}
$exceptionController = new ExceptionController();


if($_GET["controller"] == "login"){
    $controller = new LoginController();
    if($_GET["action"] == "login"){
        $controller->login();
    } else if ($_GET["action"] == "logout"){
        $controller->logout();
    }

} else if($_GET["controller"] == "bike"){
    $controller = new BikeController();

    if($_GET["action"] == "list"){
        $controller->list();
    } else if($_GET["action"] == "listby"){
        $controller->listby();
    } else if($_GET["action"] == "add"){
        $controller->add();
    }else if($_GET["action"] == 'detail' && array_key_exists("id", $_GET)){
        $controller->detail($_GET["id"]);
    } else if($_GET["action"] == 'delete' && array_key_exists("id", $_GET)){
        $controller->delete($_GET["id"]);
    } else {
        $exceptionController->notFound();
    }
} else {
    $exceptionController->notFound();
}
