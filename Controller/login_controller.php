<?php
	include_once("../Model/login_model.php");
	$obj=new Login();
 	if(isset($_REQUEST["submit"])){  
		if(!empty($obj->user=$_REQUEST["user"])  && !empty($obj->pass=$_REQUEST["pass"])) { 	
			$obj->user=$_REQUEST["user"];
			$obj->pass=$_REQUEST["pass"];
			$obj->LoginCheck();
		} 
 	else {  
    echo "All fields are required!";  
	}	
}  
?>