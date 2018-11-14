<?php 
include_once('createpost_model.php');
class EditPost extends CreatePost{
	
	function GetRecordId()
	{
		$connection = $this->Connect();
		$str="SELECT title,content,images FROM user_info WHERE code=".$_REQUEST["id"];
		$rs=mysqli_query($connection,$str);
	    while($row=mysqli_fetch_assoc($rs)){
		return $row; 
		}
	}

	function EditRecord(){
		$connection = $this->Connect();
		$file_name=$_FILES["fileToUpload"]["name"];
		$temp_name=$_FILES["fileToUpload"]["tmp_name"];
		$target_path = "../images/".$file_name;
		move_uploaded_file($temp_name, $target_path);
		$str="UPDATE user_info SET title='$this->title',content='$this->content',images='$target_path' WHERE code=".$_REQUEST["code"];
		$rs=mysqli_query($connection,$str);
		return $str;
	}
}