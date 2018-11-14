<?php 
	include_once("../Model/editpost_model.php");
	$obj=new EditPost();

	if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit"&& isset($_REQUEST["id"])){
    	$edit=$obj->GetRecordId();
	}

	if(isset($_REQUEST['update'])){
		$obj->title=$_REQUEST["title"];
		$obj->content=$_REQUEST["content"];	
		$obj->images=$_FILES["fileToUpload"]["tmp_name"];
		$obj->code=$_REQUEST["code"];
		$obj->EditRecord();
		header('location:../View/viewpost_view.php');	
	}
?>