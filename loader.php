<?php
spl_autoload_register(function($classname){
    if(str_ends_with($classname,"Controller")){
        require "Controller/".$classname.".php";
    }
    elseif(str_ends_with($classname, "Manager")){
        require "Model/Manager/".$classname.".php";
    } else{
        require "Model/".$classname.".php";
    }
});
