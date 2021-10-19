<?php

 function getRoutes($route){
    $routes = array(
        ""=>"table_list",
        "home"=>"table_list",
        "cadastrar"=>"form_cad",
        "editar"=>"form_edit",
        "cadastro"=>"cadastro",
        "editado"=>"editado",
        
         
    );
       if(array_key_exists($route,$routes)){
           if(file_exists("../app/includes/{$routes[$route]}.php")){
               return "../app/includes/{$routes[$route]}.php";
           }else{

            return "home";
           }
       }else{

        return "../app/includes/error.php";
       }
     
 }