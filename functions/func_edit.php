<?php


function editStudants($table,$fname,$sname,$cname,$date,$edit){
    $conection = getCon();
    $sql = "update $table set nome = ?,sobrenome = ?, curso = ?, dt_nascimento = ? where id = ?  ";
    $update = $conection->prepare($sql);
    $update->bindValue(1,$fname);
    $update->bindValue(2,$sname);
    $update->bindValue(3,$cname);
    $update->bindValue(4,$date);
    $update->bindValue(5,$edit);
    $update->execute();

}