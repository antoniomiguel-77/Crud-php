<?php

function delStudants($table,$del){

    $conection = getCon();
    $sql = "delete from $table where id = ?";
    $delete = $conection->prepare($sql);
    $delete->bindValue(1,$del);
    $delete->execute();
    

    return ($delete)? true : false;
    
}