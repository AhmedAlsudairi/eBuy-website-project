<?php
    session_start();
    $time = getdate() ;
    $min ;
    if($time['minutes'] >= 10){
        $min = $time['minutes'] ;
    }else{
        $min = "0".$time['minutes'] ;
    }
    $hours = $time['hours']+1 ;
    $mesTime = $hours.":".$min ;

    $mes = $_POST['userMes'] ;
    //$account = $_SESSION['username'] ;

    $con= new mysqli("localhost","root","","swe381project");

    $sender = $_POST['sender'] ;
    $receiver = $_POST['receiver'] ;

    $sql1 = "INSERT INTO directmessage(sender, receiver, mymessage, hismessage, time) VALUES ('$sender','$receiver','$mes','','$mesTime')" ;
    $result1 = mysqli_query($con,$sql1);

    $sql2 = "INSERT INTO directmessage(sender, receiver, mymessage, hismessage, time) VALUES ('$receiver','$sender', '','$mes','$mesTime')" ;
    $result2 = mysqli_query($con,$sql2);

    header("location:messaging.php?sender=$sender&receiver=$receiver");
?>