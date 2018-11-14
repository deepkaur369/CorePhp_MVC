<?php
	include_once("../Model/viewpost_model.php");
	$obj=new ViewPost();
	$data = $obj->GetRecords();
	
	if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="delete"){
    	$obj->code=$_REQUEST["id"];
		$obj->DeleteRecord();
		header('location:../View/viewpost_view.php');
	}
?>
