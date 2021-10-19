<?php
 
function cadStudants($table,$name,$lastname,$course,$date){

    $conection = getCon();
    $sql = "insert into $table(nome,sobrenome,curso,dt_nascimento) values(?,?,?,?)";
    $cad = $conection->prepare($sql);
    $cad->bindValue(1,$name);
    $cad->bindValue(2,$lastname);
    $cad->bindValue(3,$course);
    $cad->bindValue(4,$date);
    $cad->execute();
    

}
 

 

