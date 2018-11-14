<?php
	include_once("../Model/createpost_model.php");
	$obj=new CreatePost();

	if(isset($_REQUEST['title']) && !empty($_POST['title'])) { 
		$obj->title=$_REQUEST["title"];
		$obj->content=$_REQUEST["content"];
		$obj->images=$_FILES["fileToUpload"]["tmp_name"];
		$obj->CreatePost2();
		header("location:../View/createpost_view.php");
	}
	if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit"&& isset($_REQUEST["id"])){
   		$edit= $obj->GetRecordId(); 
	}	
?>
