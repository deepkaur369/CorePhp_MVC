<?php
include_once("../Model/reg_model.php");
$obj=new Registration();
if(isset($_POST["submit"])){ 
	if(!empty($obj->user=$_POST["user"]) && !empty($obj->email=$_POST["email"]) && !empty($obj->pass=$_POST["pass"])){
		$obj->user=$_POST["user"];
		$obj->pass=$_POST["pass"];
		$obj->email=$_POST["email"];
		$obj->Save();
	}
    else {  
       echo "All fields are required!";  
   	} 
  header("location:../View/reg_view.php");
}

?>
