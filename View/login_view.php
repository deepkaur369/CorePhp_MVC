<!doctype html>  
<html>  
<head>  
<title>Login</title>  

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
            h1 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
        h3 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
} </style>  
</head>  
    <body>  
      <p><a href="reg_view.php">Registration</a></p>  
        <center><h2>LOGIN Form</h2></center>  
          <form action="../Controller/login_controller.php" method="POST">  
            <legend>  
                <fieldset>  
                      <table width="800" border="0" align="center">
	                         <tr>
                                <th scope="row"><div align="right">Username</div></th>
                                <td><input name="user" type="text" id="user" value=""/></td>
                            </tr>
                            <tr>
                                <th scope="row"><div align="right">Password</div></th>
                                <td><input name="pass" type="password" id="pass" value=""/></td>
                            </tr>          
                            <tr> 
                                 <th scope="row"> <input type="submit" value="LOGIN" name="submit" /> </th>
                            </tr>
                      </table>     
                </fieldset>  
            </legend>  
        </form>  
    </body>  
</html> 