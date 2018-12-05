<?php
include_once("../Model/reg_model.php");
$obj=new Registration();
if(isset($_POST["submit"])){ 
	
		$obj->user=$_POST["user"];
		$obj->pass=$_POST["pass"];
		$obj->email=$_POST["email"];
		$obj->images=$_FILES["fileToUpload"]["tmp_name"];
		$obj->Save();
  		header("location:../View/user_view.php");
		
	}
    else {  
       echo "All fields are required!";  
   	} 
  //header("location:../View/reg_view.php");
//}
?>
user_controller
<?php
	include_once("../Model/user_model.php");
	$obj=new ViewUser();
	$data = $obj->GetRecords();
	
	if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="delete"){
    	$obj->id=$_REQUEST["id"];
		$obj->DeleteRecord();
		header('location:../View/user_view.php');
	}
?>

reg_model
<?php 
include_once('dbconnection.php');
class Registration extends DbConnect{
	private $user , $pass , $email,  $images, $id;
	public  function __set($key, $value)
	 {
	 	switch(strtolower($key))
		{
			case "user" :
					$this->user=$value;
					break;
			case "pass" :
					$this->pass=$value;
					break;
			case "email" :
					$this->email=$value;
					break;
			case "images" :
					$this->images=$value;
					break;
			case "id" :
					$this->id=$value;
					break;					
		}
	}
	public function __get($key)
	{
		switch (strtolower($key))
		{
			case "user":
				return ($this->user);
				break;
			case "pass":
				return($this->pass);
				break;
			case "email":
				return($this->email);
				break;
			case "id":
				return($this->id);
				break;
			case "images":
				return($this->images);
				break;			
		}
	}
	function Save()
	{
		$connection = $this->Connect();
		$select=("SELECT * FROM login WHERE username='".$this->user."'");
     	$row=mysqli_query($connection,$select);
        $numrows=mysqli_num_rows($row);  
        if($numrows==0)  { 
	    $file_name=$_FILES["fileToUpload"]["name"];
	    $temp_name=$_FILES["fileToUpload"]["tmp_name"];
	    $imgtype=$_FILES["fileToUpload"]["type"];
	    $target_path = "../images/".$file_name;
		move_uploaded_file($temp_name, $target_path);
		 
        	$sql="INSERT INTO login(username,email,password,images) VALUES('$this->user','$this->email','$this->pass','$file_name')";    
       	    $result=mysqli_query($connection,$sql);  
              if($result){  
        		echo "Account Successfully Created";  
       		  } else {  
       			 echo "Failure!";  
        		}  
      
        } else {  
        echo "That username already exists! Please try again with another.";  
        }      
	}
}
?>
user_model
<?php 
include_once('reg_model.php');
class ViewUser extends Registration{
	function GetRecords()
	{
		$connection = $this->Connect();
		$str=("SELECT * FROM login");
		$rs=mysqli_query($connection,$str);
		$result= array(); // declare $ result as a array 
	    while($row=mysqli_fetch_assoc($rs)){
		$result[]=$row;  //save all the row in a result array and return the result array
		}
		return $result;
	}
	function DeleteRecord(){
		$connection = $this->Connect();
		$str="delete from login where id='$this->id'";
		mysqli_query($connection,$str);
	
	}
}
?>

user_view
<?php
    include_once("../Controller/user_controller.php");

?>
<!doctype html>  
    <html>  
    <head>  
    <title>Welcome</title>  
        <style>   
            body{  
                  
        margin-top: 100px;  
        margin-bottom: 100px;  
        margin-right: 150px;  
        margin-left: 80px;  
        background-color: azure ;  
        color: palevioletred;  
        font-family: verdana;  
        font-size: 100%  
          
            }  
                h2 {  
        color: indigo;  
        font-family: verdana;  
        font-size: 100%;  
    }  
            h1 {  
        color: indigo;  
        font-family: verdana;  
        font-size: 100%;  
    }  
             
        </style>  
    </head>  
    <body>   
            <th colspan="2" scope="row"><table width="100%" border="1">
                <tr>
                      <th scope="col">Sr.No</th>
                      <th scope="col">username</th>
                      <th scope="col">Email</th>
                      <th scope="col">Image</th>
                      <th colspan="2" scope="col"><div align="center"> Action </div></th>
                </tr>
                  <?php 
                        $srno=1;
                        foreach($data as $value){ // $data from viewpost_controller.php and show the data in a table
                      ?>
                <tr>
                      <td><?php echo $srno++ ; ?></td>
                      <td><?php echo $value['username'];?></td>
                      <td><?php echo $value['email'] ;?></td>
                      <td><img src="<?php echo 'http://localhost/CorePhp_MVC/images/'.$value['images'] ;?>"></td>

                      <td><a href="../Controller/user_controller.php?mode=delete&id=<?php echo $value["id"]?>">Delete</a></td>
                </tr>
                      <?php } ?>
                </table>
            </th>
    </body>  
</html>  
  
