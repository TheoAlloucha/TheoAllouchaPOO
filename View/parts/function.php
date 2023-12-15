<?php
function displayBsClass($name, $errors){
    if(array_key_exists($name, $errors)){
        return 'is-invalid';
    }
}

function keepValue($name){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        return $_POST[$name];
    }
}

function displayErrorMessage($name, $errors){
    if(array_key_exists($name, $errors)){
        echo('<div class="invalid-feedback">'.$errors[$name].'</div>');
    }
}
