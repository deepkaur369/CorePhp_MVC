<?php   
    include_once("../Controller/viewpost_controller.php");
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
            <th colspan="2" scope="row"><table width="100%" border="1">
                <tr>
                      <th scope="col">Sr.No</th>
                      <th scope="col">Title</th>
                      <th scope="col">Content</th>
                      <th scope="col">Image</th>
                      <th colspan="2" scope="col"><div align="center"> Action </div></th>
                </tr>
                  <?php 
                        $srno=1;
                        foreach($data as $value){ // $data from viewpost_controller.php and show the data in a table
                      ?>
                <tr>
                      <td><?php echo $srno++ ; ?></td>
                      <td><?php echo $value['title'];?></td>
                      <td><?php echo $value['content'] ;?></td>
                      <td><img src="<?php echo 'http://localhost/Reg_login/Controller/'.$value['images'] ;?>"></td>
                      <td><a href="../View/editpost_view.php?mode=edit&id=<?php echo $value["code"]?>">Edit</a></td>
                      <td><a href="../Controller/viewpost_controller.php?mode=delete&id=<?php echo $value["code"]?>">Delete</a></td>
                </tr>
                      <?php } ?>
                </table>
            </th>

          <div align="center"> <p><a href="createpost_view.php">Creat Post</a></p> </div>
    </body>  
</html>  
  