<?php 
class DbConnect{
    public function Connect(){
         $host = 'localhost';
         $user = 'root';
         $pass = 'root';
         $db = 'user_registration';
         $connection = mysqli_connect($host,$user,$pass,$db); 
         return $connection;
     }
}
?>