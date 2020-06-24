<?php 
session_start();
$account = $_SESSION['username'] ;
$sellerAcc = $_POST['userAcc'] ;
$con = new mysqli("localhost","root","","swe381project");
$query = "SELECT * FROM messageacc WHERE (sender = '$account' OR sender = '$sellerAcc') AND (receiver = '$account' OR receiver = '$sellerAcc')";
$result = mysqli_query($con,$query);
$numberOfRows = mysqli_num_rows($result) ;
if($numberOfRows == 0){
    $sql = "INSERT INTO messageacc(sender, receiver) VALUES ('$account','$sellerAcc')" ;
    $sendSql = mysqli_query($con,$sql);
    $dm = "INSERT INTO directmessage(sender, receiver, mymessage, hismessage, time) VALUES ('$account','$sellerAcc','','','')";
    $sendDm = mysqli_query($con,$dm);
}
header("Location:messaging.php?sender=$account&receiver=$sellerAcc") ;
?>