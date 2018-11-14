<?php 
include_once('reg_model.php');
class Login extends Registration{

	function LoginCheck(){
		$connection = $this->Connect();
		$select=("SELECT * FROM login WHERE username='".$this->user."' AND password='".$this->pass."'");  
  	$row=mysqli_query($connection,$select);
    $numrows=mysqli_num_rows($row); 
    /*check the username  and password is matched with the database records */ 
    
    if($numrows!=0)  { 
      
   		while($row=mysqli_fetch_assoc($row)) {  
    		$dbusername=$row['username'];  
    		$dbpassword=$row['password'];  
    		}  
        
        if($this->user == $dbusername && $this->pass == $dbpassword)  {  
   		  session_start();  //if the username and password is matched then store the username in a session
   		  $_SESSION['sess_user']=$this->user;  
   		  header("Location: ../View/createpost_view.php");  
   			 } 

    } else {  
      echo "Invalid username or password!";  
     }  
	}
}
?>