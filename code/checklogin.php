<?php
session_start();
if(!isset($_POST['username']) || !isset($_POST['pass']))
    header('location:login.php');
else{
  

    $username = $_POST['username'];
    $password = $_POST['pass'];

    $db = mysqli_connect("localhost","root","","swe381project") or die("Could not connect to database");
    
    
$query = "SELECT * FROM account WHERE username='$username' AND password='$password'";
  $result = mysqli_query($db,$query);
  if(mysqli_num_rows($result))
    {
      $_SESSION['username']= $username;
     
      header('location:indexLogedIn.php');
      
    }
    else{
        header('location:login.php?error=Wrong username or password!');
        
    }
       
 
}
?>