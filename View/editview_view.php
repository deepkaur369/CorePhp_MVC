<?php 
    include_once("../Controller/editpost_controller.php");
    foreach ($edit as $value) {
      //store all the deatils in a $value and show the database value in the textbox 
    }
    session_start();
    if(!isset($_SESSION["sess_user"])){  
        header("location:../View/login_view.php");  
    }
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
        <div align="right"><h2>Welcome, <?php echo $_SESSION['sess_user'];?>! <a href="../Controller/logout_controller.php">Logout</a></h2></div>

        <form enctype="multipart/form-data" id="form" name="form" method="post"   action="../Controller/editpost_controller.php">
            <input type="hidden" name="code" id='id' value="<?php  echo $_REQUEST["id"]?>"> 
                <tr>
                    <th scope="row"><div align="center">Title</div></th>
                    <div align="center"><input name="title" type="text" id="title" value="<?php echo  $value['title'] ?>" /></div></td>
                </tr>
                <tr>
                    <th scope="row"><div align="center">Content</div></th>
                    <div align="center"><input name="content" type="text" id="content" value="<?php echo  $value['content'] ?>"/></div></td>
                </tr>
                <tr>
                    <input type="file" name="fileToUpload" id="fileToUpload" >
                    <input type="submit" value="Update" name="update" id="update" >
                    </br> <span ><?php echo  $value['images'] ?></span>
                </tr>
        </form>  
            <div align="right"> <p><a href="../View/viewpost_view.php">View Post</a></p> </div>
    </body>  
</html>  

