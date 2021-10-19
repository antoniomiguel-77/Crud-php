
<div class="form">
    <div class="msg">
<?php 
 
if(isset($_SESSION['MSG']) && $_SESSION['MSG'] == true){ echo "<p class='msg'> Operação realizada com sucesso</p>";}  
unset($_SESSION['MSG']);
 
?>
</div>


    <form action="cadastro" method="post">
        <p><input type="text" name="fname" placeholder="First Name"></p>
        <p><input type="text" name="sname" placeholder="Second Name"></p>
        <p><input type="text" name="cname" placeholder="Course"></p>
        <p><input type="date" name="date" placeholder="Date"></p>
        <button type="submit" name="submit">Save</button>
        <button type="reset">Reset</button>
        <a href="home">Back to Home</a>

    </form>

    
</div>
