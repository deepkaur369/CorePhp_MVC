    <?php   
    session_start();  
    unset($_SESSION['sess_user']);  
    session_destroy();  
    header("location:../View/login_view.php");  
    ?>  