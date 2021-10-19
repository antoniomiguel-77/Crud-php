<?php
    $edit = filter_input(INPUT_GET,'edit',FILTER_SANITIZE_NUMBER_INT);
    $find = findStudants('tb_estudantes',$edit);
foreach($find as $finded);

?>

<div class="form">
<form action="editado" method="post">
    <p><input type="text" name="fname" placeholder="First Name" value="<?php echo $finded->NOME ?>" ></p>
    <p><input type="text" name="sname" placeholder="Second Name" value="<?php echo $finded->SOBRENOME ?>"></p>
    <p><input type="text" name="cname" placeholder="Course" value="<?php echo $finded->CURSO ?>"></p>
    <p><input type="date" name="date" placeholder="Date" value="<?php echo $finded->DT_NASCIMENTO ?>"></p>
    <button type="submit" name="send">Edite</button>
    <input type="hidden" name="edit" value="<?php echo $finded->ID ?>">
    <a href="home">Back to Home</a>
</form>
 
</div>
 