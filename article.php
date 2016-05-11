<?php
require ("./class/PDOsql.class.php");


$connexion=null;

// On lance Smarty

require ("./smarty/Smarty.class.php");

session_start();

$smarty = new Smarty();

$smarty->assign('list_articles', $list_articles);

$smarty->display("main.html");
?>
