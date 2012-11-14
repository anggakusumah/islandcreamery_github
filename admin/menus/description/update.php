<?php 
session_start();
if ($_SESSION["user_status"]!="admin") {
	header("location:../login.php?redirect=read"); }
else {
		include("../../../static/connect_database.php");
		
		$description["Ice Cream"] = $_POST["ice_cream"];
		$description["Cafe"] = $_POST["cafe"];
		$description["Dessert"] = $_POST["dessert"];
		
		foreach($description as $title_read=>$description_read){
			mysql_query("
				UPDATE tbl_menus_content 
				SET description_read='$description_read' 
				WHERE title_read='$title_read'
			",$con);
		}
		
		header("location:../description?success=true"); 
}
?>