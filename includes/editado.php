<?php


if(isset($_POST['send'])){

    $fname = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING);
    $sname = filter_input(INPUT_POST,'sname',FILTER_SANITIZE_STRING);
    $cname = filter_input(INPUT_POST,'cname',FILTER_SANITIZE_STRING);
    $date = filter_input(INPUT_POST,'date',FILTER_SANITIZE_STRING);
    $edit = filter_input(INPUT_POST,'edit',FILTER_SANITIZE_NUMBER_INT);

    if( $fname !="" && $sname !="" && $cname !="" && $date !="" && $edit !=""){

        editStudants('tb_estudantes',$fname,$sname,$cname,$date,$edit);
        $_SESSION['sucess'] = "Dados editado com sucesso!";

    }

    header("location:home");

}
 