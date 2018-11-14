<?php 
include_once('reg_model.php');
class CreatePost extends Registration{

private $title, $content , $images ,$code;
public  function __set($key, $value)
	 {
	 	switch(strtolower($key))
		{
			case "title" :
					$this->title=$value;
					break;
			case "content" :
					$this->content=$value;
					break;
			case "images" :
					$this->images=$value;
					break;
			case "code" :
					$this->code=$value;
					break;		
			default:
				parent::__set($key, $value);
				break;			
		}
	}
	public function __get($key)
	{
		switch (strtolower($key))
		{
			case "title":
				return ($this->title);
				break;
			case "content":
				return($this->content);
				break;
			case "images":
				return($this->images);
				break;	
			case "code":
				return($this->code);
				break;	
			default:
				parent::__get($key);
				break;		
		}
	}

function CreatePost2(){
	$connection = $this->Connect();
	if (!empty($_FILES["fileToUpload"]["tmp_name"])) {

	    $file_name=$_FILES["fileToUpload"]["name"];
	    $temp_name=$_FILES["fileToUpload"]["tmp_name"];
	    $imgtype=$_FILES["fileToUpload"]["type"];
	    $target_path = "../images/".$file_name;

			if(move_uploaded_file($temp_name, $target_path)) {
			session_start();
   		 	$user1=$_SESSION["sess_user"];
	    	$query_upload="INSERT into user_info(title,content,images,username) VALUES('$this->title','$this->content','$target_path','$user1') ";
	  		 mysqli_query($connection,$query_upload) ;
			}else{
	   		return "Error While uploading image on the server";
	 		}
   		}
  	}
}

?>