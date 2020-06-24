<?php 
session_start();
$account = $_SESSION['username'] ;
$itemID = $_POST['item-id'] ;
$con = new mysqli("localhost","root","","swe381project");
$inter = "INSERT INTO interest(itemid, InstrestedAcc) VALUES ('$itemID','$account')";
$result = mysqli_query($con,$inter);
header("Location:productPage.php?itemId=$itemID") ;
?>