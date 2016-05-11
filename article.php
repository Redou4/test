<?php
require ("./class/PDOsql.class.php");


$connexion->connect= new PDOsql(); 
$sql = "SELECT * FROM article ORDER BY id DESC";
//$opt = array();
$value = $connexion->connect->query($sql);


$list_articles = array();
$i = 0;
while($data = $value->fetch()){
    $list_articles[$i]['id'] = $data['id'];
    $list_articles[$i]['titre'] = $data['titre'];
    $list_articles[$i]['texte'] = $data['texte'];
    $list_articles[$i]['date'] = $data['date'];
    $list_articles[$i]['tag'] = $data['tag'];
    $i++;
}
$connexion=null;

// On lance Smarty

require ("./smarty/Smarty.class.php");

session_start();

$smarty = new Smarty();

$smarty->assign('list_articles', $list_articles);

$smarty->display("main.html");
?>
