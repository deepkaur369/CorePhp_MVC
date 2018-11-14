<!doctype html>  
    <html>  
    <head>  
    <title>Register</title>  
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
             h2 {  
        color: indigo;  
        font-family: verdana;  
        font-size: 100%;  
    }</style>  
    </head>  
  <body>  
   <div id="body">
       <p><a href="../View/login_view.php">Login</a></p>  
        <center><h2>Registration Form</h2></center>  
            <form action="Controller/reg_controller.php" method="POST">  
              <legend>  
                  <fieldset>  
                      <table width="800" border="0" align="center">
	                          <tr>
                                <th scope="row"><div align="right">Username</div></th>
                                <td><input name="user" type="text" id="user" value=""/></td>
                            </tr>
                            <tr>
                                <th scope="row"><div align="right">Email</div></th>
                                <td><input name="email" type="text" id="email" value=""/></td>
                            </tr>
                            <tr>
                                <th scope="row"><div align="right">Password</div></th>
                                <td><input name="pass" type="password" id="pass" value=""/></td>
                            </tr>          
                            <tr> 
                                <th scope="row"> <input type="submit" value="Register" name="submit" /> </th>
                            </tr>
                        </table>     
                    </fieldset>  
                </legend>            
            </form> 
        </div> 
    </body>      
</html>   