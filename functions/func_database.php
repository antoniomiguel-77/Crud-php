<?php


function getCon(){
    $instance = "";

    if(isset($instance) ){
        $instance = new PDO('mysql:host=localhost;dbname=db_crud; charset=utf8','root','');
        $instance->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

    }


    return $instance;
}