<?php require_once("config.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./app/css/style.css">
    <title>Página Principal</title>
</head>
<body>
    <main>
        <header class="header">
            <h1>Cadastro de Estudantes</h1>
           
        </header>
        <section class="content">
 
        <?php require_once( getRoutes($_GET['url']));?>

        </section>
        <footer class="footer">
            <p>&copy; Todos os direitos reservados</p>
        </footer>
    </main>
</body>
</html>