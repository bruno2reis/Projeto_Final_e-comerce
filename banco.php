<?php
// constantes com as credenciais de acesso ao banco MySQL
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'sofia2502');
define('DB_NAME', 'farma_senac');

// habilita todas as exibições de erros
ini_set('display_errors', true);
error_reporting(E_ALL);

date_default_timezone_set('America/Sao_Paulo');


require_once "functions.php";