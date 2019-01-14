<?php 
include 'database.php';
$db = new database();
 
$action = $_GET['action'];
 if($action == "add"){
 	$db->insert($_POST['name'],$_POST['taxcode'],$_POST['price']);
 	header("location:index.php");
 }elseif($action == "delete"){ 	
 	$db->delete($_GET['id']);
	header("location:index.php");
 }elseif($action == "edit"){
 	$db->update($_POST['id'],$_POST['name'],$_POST['taxcode'],$_POST['price']);
 	header("location:index.php");
 }
?>