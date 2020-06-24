<?php
session_start();
if(!isset($_POST['email']) || !isset($_POST['username']) || !isset($_POST['pass'])  || !isset($_POST['cnfpass']))
    header('location:signup.php');
else{

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $cnfpassword = $_POST['cnfpass'];
    $db = mysqli_connect("localhost","root","","swe381project") or die("Could not connect to database");

    if(($password != $cnfpassword)){
        header('location:signup.php?error=Passwords dont match!');}
  else{
      $checkuser = "SELECT * FROM account WHERE username = '$username' OR email = '$email' ";
   
      $result = mysqli_query($db,$checkuser);
   
        if(mysqli_num_rows($result))
           header('location:signup.php?error=email or username already exists!');

    
      
    
    else{
       $sql = "INSERT INTO account (email,username,password) VALUES('$email','$username','$password')";
       mysqli_query($db,$sql);
       $_SESSION['username']=$username;
       
        header('location:login.php?signup_success= Register completed!');}
  }
  

}
?>