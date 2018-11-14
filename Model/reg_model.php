<?php 
include_once('dbconnection.php');
class Registration extends DbConnect{
	private $user , $pass , $email, $title, $content, $images;
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
		}
	}

	function Save()
	{
		$connection = $this->Connect();
		$select=("SELECT * FROM login WHERE username='".$this->user."'");
     	$row=mysqli_query($connection,$select);
        $numrows=mysqli_num_rows($row);  
        if($numrows==0)  {  
        	$sql="INSERT INTO login(username,email,password) VALUES('$this->user','$this->email','$this->pass')";    
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
