<?php 
include_once('createpost_model.php');
class ViewPost extends CreatePost{
	function GetRecords()
	{
		$connection = $this->Connect();
		session_start();
   		$user1=$_SESSION["sess_user"];
		$str=("SELECT * FROM user_info WHERE username='".$user1."'");
		$rs=mysqli_query($connection,$str);
		$result= array(); // declare $ result as a array 
	    while($row=mysqli_fetch_assoc($rs)){
		$result[]=$row;  //save all the row in a result array and return the result array
		}
		return $result;
	}
	function DeleteRecord(){
		$connection = $this->Connect();
		$str="delete from user_info where code='$this->code'";
		mysqli_query($connection,$str);
	
	}

}

?>