<?php 
session_start();
if ($_SESSION["user_status"]!="admin") {
	header("location:../login.php?redirect=read"); }
	else {
		include("../../../static/connect_database.php");
		
		$info["title"] = $_POST["title"];
		$info["description"] = $_POST["description"];
		
		foreach($info as $type=>$fill)mysql_query("UPDATE tbl_menus_info SET fill='$fill' WHERE type='$type'",$con);
		
		header("location:../description?success=true"); }
?>