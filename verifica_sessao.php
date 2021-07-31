<?php
// Inicia sessões
session_start();
session_cache_expire(15);
session_name(md5('seg'.$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']));

// Verifica se existe os dados da sessão de login
if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])) { 
    header("Location: login.php");
exit; }
?>

