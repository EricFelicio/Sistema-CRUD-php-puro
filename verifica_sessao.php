<?php
// Inicia sessões
session_start();

// Verifica se existe os dados da sessão de login
if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])) { 
    header("Location: login.php");
exit; }
?>