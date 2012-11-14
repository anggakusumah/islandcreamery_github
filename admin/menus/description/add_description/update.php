<?php session_start();
if ($_SESSION["user_status"]!="admin") {
	header("location:../../../login.php?redirect=description"); }
	else {
		$title_read=$_POST["title_read"];
		$description_read=$_POST["description_read"];
		
		include("../../../../static/connect_database.php");
		mysql_query("INSERT INTO tbl_menus_content(title_read,description_read) VALUES ('$title_read','$description_read')",$con);
		$get_id = mysql_query("SELECT * from tbl_menus_content WHERE title_read='$title_read', description_read='$description_read'",$con);	

if (mysql_num_rows($get_id)!=null) {
	$get_id_array = mysql_fetch_array($get_id);
	$id_thumbnail= $get_id_array["id_thumbnail"]; }	
	
	header("location:../../description/view_description"); }

?>