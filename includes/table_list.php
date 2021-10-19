

<div class="table">
  <?php
   
    $del = filter_input(INPUT_GET,'del',FILTER_SANITIZE_NUMBER_INT);
    $name = filter_input(INPUT_POST,'search',FILTER_SANITIZE_STRING);
 
    if(isset($del)){
            $delete =  delStudants('tb_estudantes',$del);
             if($delete){ echo"<p class='msg'>Estudante deletado com sucesso</p>";}
  
    }

?>  
            <form action="" method="post" class="form">
                <input type="search" name="search" placeholder="search here..." class="search">
            </form>
<table  >
    <thead>
        <tr>
            <th>[ID]</th>
            <th>NOME</th>
            <th>SOBRENOME</th>
            <th>CURSO</th>
            <th>DATA</th>
            <th>EDITE</th>
            <th>DELETE</th>

        </tr>
</thead>
        <tbody>
           
            <?php 
            $listAll = listStudants("tb_estudantes");
            $search = searchStudants("tb_estudantes",$name);

            if(isset($name) && $name !=""){$collection = $search;}
            else{$collection = $listAll;}
           
            foreach($collection as $all):
                
             ?>
            <tr>
                
                <td><?php echo $all->ID?></td>
                <td><?php echo $all->NOME?></td>
                <td><?php echo $all->SOBRENOME?></td>
                <td><?php echo $all->CURSO?></td>
                <td><?php echo $all->DT_NASCIMENTO?></td>
                <td><a href="editar?edit=<?php echo $all->ID ?>" class="btn-edit">Edite</a></td>
                <td><a href="home?del=<?php echo $all->ID ?>" class="btn-delete">Delete</a></td>

            </tr>
           <?php  endforeach; ?>
        </tbody>
    </thead>
</table>
<a href="cadastrar" id="link">Cadastrar</a>
</div>