<?php

function listStudants($table){

    $conection = getCon();
    $sql  = "select * from $table";
    $list = $conection->prepare($sql);
    $list->execute();
    
    return  $list->fetchAll();


}