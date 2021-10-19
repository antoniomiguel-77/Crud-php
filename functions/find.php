<?php

function findStudants($table,$edit){

    $conection = getCon();
    $sql  = "select * from $table where id = ?";
    $list = $conection->prepare($sql);
    $list->bindValue(1,$edit);
    $list->execute();
    
    return   $list->fetchAll();


}