<?php

function searchStudants($table,$name){

    $conection = getCon();
    $sql = "select * from $table where nome = ?";
    $search = $conection->prepare($sql);
     $search->bindValue(1,$name);
    $search->execute();

    return $search->fetchAll();
}