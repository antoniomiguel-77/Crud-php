 <?php
 ini_set('display_errors',true);
 date_default_timezone_set("America/Sao_paulo");
 session_start();
 // chamar funcao de conexao com o banco de dados
 require_once("functions/func_database.php");
 // chamar as funcoes de manipulacao do banco de dados
require_once("../app/functions/func_list.php");
require_once("../app/functions/func_cad.php");
require_once("../app/functions/func_del.php");
require_once("../app/functions/func_edit.php");
require_once("../app/functions/func_search.php");
require_once("../app/functions/func_routes.php");
require_once("../app/functions/find.php");

 //chamar os meus includes
require_once("includes/cadastro.php");
 

