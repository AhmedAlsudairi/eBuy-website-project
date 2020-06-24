<?php
session_start();
if(!isset($_SESSION['username']))
    header('location:login.php?error=Please signin again!');
?>
<?php
$con= new mysqli("localhost","root","","swe381project");
$sender = $_GET['sender'] ;
$receiver = $_GET['receiver'] ;
$query = "select * from directmessage where sender = '$sender' AND receiver = '$receiver'";
$result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>direct messaging</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <style>
        .container1 {
        border: 2px solid #0073e6;
        background-color: #3399ff;
        border-radius: 5px;
        padding: 10px;
        margin: 10px ;
        width: 400px;
        }

        .darker {
        border-color: #00e600;
        background-color: #33ff33;
        position: relative;
        left: 280px;
        }

        .container1::after {
        content: "";
        clear: both;
        display: table;
        }

        .container1 img {
        float: left;
        max-width: 60px;
        width: 100%;
        margin-right: 20px;
        border-radius: 50%;
        }

        .container1 img.right {
        float: right;
        margin-left: 20px;
        margin-right:0;
        }

        .time-right {
        float: right;
        /* color: #aaa; */
        color: #404040;
        }

        .time-left {
        float: left;
        /* color: #999; */
        color: #404040;
        }
        #chatBox{
                border: 1.5px solid gray;
                position: absolute; 
                left: 250px;
                top: 90px;
                width: 45rem;
                height: 27rem;
                background-color: white;
                overflow-y: scroll;
                overflow-x: hidden;
        }
        h5{
            color: white;
            position: absolute;
            left: 560px;
        }
        </style>
        <!-- <script>
        
            // function start(){
            //     var mybutton = document.getElementById("sendButton");
            //     mybutton.addEventListener("click",send,false);
            // }
            // function send(){
            //     var message = document.getElementById("message");
            //     var mes = message.value;    
                
            //     var seconDiv = document.createElement("div");
            //     seconDiv.setAttribute("class","container darker");

            //     var myImg = document.createElement("img");
            //     myImg.setAttribute("src","images\default-user.png");
            //     myImg.setAttribute("alt","Avatar");
            //     myImg.setAttribute("style","width:100%;");
            //     myImg.setAttribute("class","right");

            //     var myP = document.createElement("p");
            //     myP.innerHTML = mes ;

            //     var mySpan = document.createElement("span");
            //     mySpan.setAttribute("class","time-left");
            //     var d = new Date();
            //     var h = d.getHours();
            //     var m = d.getMinutes();
            //     if(m >= 0 && m <=9){
            //         var spanNode = document.createTextNode(h+":0"+m);
            //         var correctTime = h+":0"+m ;
            //     }else{
            //         var spanNode = document.createTextNode(h+":"+m);
            //         var correctTime = h+":"+m ;
            //     }
            //     mySpan.appendChild(spanNode);

            //     seconDiv.appendChild(myImg);
            //     seconDiv.appendChild(myP);
            //     seconDiv.appendChild(mySpan);

            //     var myDiv = document.getElementById("chatBox");
            //     myDiv.appendChild(seconDiv);

            //     clearText();
            // }
            // function clearText(){
            //     var message = document.getElementById("message");
            //     //message.value = "" ;
            // }
            // window.addEventListener("load",start,false);
        </script> -->
    </head>
    <body style="background-color: #ECF0F1;">
        <!-- <nav class="navbar navbar-dark bg-dark" >
            <a class="navbar-brand" href="#">
                <button type="button" class="btn btn-outline-light"><img src="icons-1.0.0-alpha2\icons\chevron-left.svg" width="20" height="20" class="d-inline-block align-top" alt="" >&nbsp; back &nbsp; </button>
            </a>
            <h5>Chat Messages</h5>
        </nav>    -->
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <div style = "font-size:23px">eBuy</div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="search_loged.php">Back <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="indexLogedIn.php">Home</a>
                                </li>
                            </div>
                            </nav> -->
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            
                            <a class="navbar-brand" href="indexLogedIn.php">eBuy</a> 

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                <li class="nav-item active"><a class="nav-link" href="indexLogedIn.php">Home<span class="sr-only">(current)</span></a></li>
                                <li class="nav-item active"><a class="nav-link" href="contact_loged.php">Contact</a></li>
                                <li class="nav-item active"><a class="nav-link" href="about_us_loged.php">About us</a></li>
                                <li class="nav-item active"><a class="nav-link" style="font-size:20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chatting with <?php echo "$receiver" ?></a></li>
                                </ul>
                                <form class="form-inline " role="search" method="post" action="search_loged.php"> 
                                    <input type="text" class="form-control mr-sm-2" placeholder="Search" name="search">
                                <button type="submit" class="btn btn-light">Search</button>
                                </form>
                                <ul class="nav navbar-nav navbar-right">
          
                                <a href="AddPage.php"> <button type="button" class="btn btn-default">Add product <span>&#43;</span></button> </a>
                                     <div class="btn-group">
                                     <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['username'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="myProducts.php">My products</a>
                                        <a class="dropdown-item" href="messagingAcounts.php">Massages</a>
                                        <a class="dropdown-item" href="interests.php">Interests</a>
                                        <a class="dropdown-item" href="signout.php"> Signout</a>
                                    </div>
                                </div>
                                </ul>
                            </div>
                            </nav>
        <div id="chatBox">
            <?php
                while($rows = mysqli_fetch_array($result)){
                    if($rows['mymessage'] != ''){
                     echo ' <div class="container1 darker">
                            <img src="images\default-user.png" alt="Avatar" class="right" style="width:100%;">
                            <p>'.$rows['mymessage'].'</p>
                            <span class="time-left">'.$rows['time'].'</span>
                            </div>';
                    }else if($rows['hismessage'] != ''){
                        echo ' <div class="container1">
                        <img src="images\default-user.png" alt="Avatar" style="width:100%;">
                        <p>'.$rows['hismessage'].'</p>
                        <span class="time-right">'.$rows['time'].'</span>
                        </div>';
                    }
                }
            ?>
            
            
        </div>    
        <nav class="navbar navbar-light bg-light" style="position: relative; bottom: -455px; right: -250px; width: 45rem; border: 1.5px solid gray;">
            <a class="navbar-brand"></a>
            <form  method = "post" action = "sendToDB.php" class="form-inline" >
            <input type ="text" name ="sender" style="display: none;" value = <?php echo $sender; ?>><input type ="text" name ="receiver" style="display: none;" value = <?php echo $receiver; ?>>
              <input id="message"  class="form-control mr-sm-2" style="width: 450px;" type="text" name = "userMes" placeholder="&nbsp;                                       &nbsp;Type Message" >
              <button id="sendButton" type ="submit" class="btn btn-outline-success">Send &nbsp; <img src="icons-1.0.0-alpha2\icons\reply.svg" width="20" height="20" class="d-inline-block align-top" alt="" ></button>
            </form>
        </nav>


    </body>
</html>    
