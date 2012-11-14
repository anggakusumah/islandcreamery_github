<?php 
session_start();

if ($_SESSION["user_status"]!="admin") {
	header("location:../../login.php?redirect=orders"); }
	else {
		$prefix="../../../";
		$title_thumbnail=$_GET["title_thumbnail"];
		include($prefix."../../static/connect_database.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php ?>
<head>
<?php
$page_title = " | Add Thumbnails";
include($prefix."static/page_head.php");
?>
<script type="text/javascript" src="<?php echo $prefix;?>script/thumbnail_detail.js"></script>
<script type="text/javascript" src="<?php echo $prefix;?>script/general.js"></script>
<script type="text/javascript" src="<?php echo $prefix;?>../script/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/general.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/thumbnail_detail.css" />
<?php include($prefix."../../static/google_track.php"); ?>
</head>

<body onload="">
<?php include($prefix."static/header.php");?>
<form method="post" id="thumb_form" action="update.php" enctype="multipart/form-data">
  <div id="page_title_bar">
    <div id="page_title_bar_fill">
      <div id="page_title"> <a href="<?php echo $prefix;?>menus/thumbnail">
        <input type="button" class="back_button left_ black_tiny_button tiny_button" value="" />
        </a> Menus</div>
      <div id="button_bar">
        <input type="button" onclick="uploadSubmit()" id="submit_button" class="save_button image_button right_ h26_button green_button button" value="Save Changes">
        <input type="hidden" name="status" value="<?php echo $status;?>" />
        <input type="hidden" name="action" id="action" value="" />
      </div>
    </div>
  </div>
  <div class="main_body">
    <div class="fill_container">
      <div class="fill_group">
        <div class="fill_row">
          <div class="fill_label">Thumbnails Name <font color="#d82424">*</font></div>
          <div class="form_1_auto">
            <input type="text" class="fill_text_box" id="title_thumbnail" name="title_thumbnail" value="<?php echo $title_thumbnail;?>" />
          </div>
        </div>
        <div class="fill_row">
          <div class="fill_label">Thumbnails Image <font color="#d82424">*</font><font color="#999999"><i> (152 x 100 px)</i></font></div>
          <img class="the_image_preview" src="<?php echo $prefix;?>../<?php echo $filename_thumbnail;?>" />
          <input type="button" class="left_ h22_button grey_button button" value="Browse File" onclick="selectFile('image_file_')" />
          <div class="form_6_auto">
            <input type="text" class="fill_text_box" id="image_filename_thumbnail_" name="" value="<?php echo $filename_thumbnail;?>" />
          </div>
          <input type="file" class="fill_file" id="image_file_" name="image_file_" onchange="this.form.image_filename_thumbnail_.value = this.value;"/>
        </div>
        <div class="void_row"></div>
      </div>
    </div>
  </div>
</form>
<?php include($prefix."static/footer.php");?>
</body>
</html>
<?php } ?>