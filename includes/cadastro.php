<?php

 

if(isset($_POST['submit'])){

    $fname = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING);
    $sname = filter_input(INPUT_POST,'sname',FILTER_SANITIZE_STRING);
    $cname = filter_input(INPUT_POST,'cname',FILTER_SANITIZE_STRING);
    $date = filter_input(INPUT_POST,'date',FILTER_SANITIZE_STRING);
     
    
if($fname !="" &&  $sname !="" && $cname != "" &&  $date !=""){
    cadStudants('tb_estudantes',$fname,$sname,$cname,$date);
     $_SESSION['MSG'] = true;
} 

header("location:cadastrar");
}