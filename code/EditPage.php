<!DOCTYPE html>
<?php
    session_start();
if(!isset($_SESSION['username']))
    header('location:login.php?error=Please signin again!');
?>

    <?php 
    $con= new mysqli("localhost","root","","swe381project");
if (mysqli_connect_errno($con)){
  echo "Failed to connect to MySQL: ".mysqli_connect_error();} 

?>
<?php
$id = $_GET['id'];
$connect = mysqli_connect("localhost","root", "","swe381project");
if(isset($_POST["submit"])){
$user = $_SESSION['username'];
$name = $_POST['Iname'];
$desc = $_POST['Idesc'];
$file = addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
$query = "UPDATE item SET title='$name',MDescription='$desc',FDescription='$desc',image='$file' WHERE id = '$id' " ;
    mysqli_query($connect,$query);
    echo '<script>alert("The item was edited successfully") </script>';
    mysqli_close($connect) ;
    header('Location:myProducts.php?message=Product has been modified successfuly');


}

?>
<html>
    <head>
    <title>eBuy</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/sheet (2).css">
        <script typy="text/javascript" src="script/script (2).js"></script>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/sheet.css">
    </head>

    <body style="padding-top: 70px">
    <!--navigation bar-->
<nav class="navbar navbar-default navbar-fixed-top">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a class="navbar-brand" href="indexLogedIn.php">eBuy</a>      </div>
      
      <div class="collapse navbar-collapse" id="defaultNavbar1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="indexLogedIn.php">Home<span class="sr-only">(current)</span></a></li>
			
          <li><a href="contact_loged.php">Contact</a></li>
          <li><a href="about_us_loged.php">About us</a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search" method="post" action="search_loged.php"> 
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search" name="search">
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          
         <a href="AddPage.php"> <button type="button" class="btn btn-default">Add product <span>&#43;</span></button> </a>
<div class="btn-group">
<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['username'] ?></button>
              <ul class="dropdown-menu">
                <li role="presentation"><a href="myProducts.php">My products</a></li>
				  <li role="presentation" ><a href="messagingAcounts.php">Massages</a></li>
                <li role="presentation" ><a href="interests.php">Interests</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a href="signout.php"> <span class="glyphicon glyphicon-log-out"></span> Signout</a></li>
              </ul>
          </div>
</li>
			
        </ul>
      </div>
      
    </div>
    
  </nav>
</nav>
          <div class="jumbotron jumbotron-fluid">
            <div class="container">
                    <h1 class="display-4" id="greeting"></h1>
                    <p class="lead">You can buy anything you want and you can sell, enjoy!<br>
                    </p>
            </div>
              </div>
              <div class="container">
              <div class="row">
<div class="col-lg-4">
    <h1 class="my-4"> Edit product: </h1>
                 
                 </div>
                 <?php
                  $id = $_GET['id'];
                  $connect = mysqli_connect("localhost","root", "","swe381project");
                  $query = "SELECT `title`, `FDescription`, `image` FROM `item` WHERE id = $id";
                  $res = mysqli_query($connect,$query) ;
                  $row = mysqli_fetch_array($res) ;
                  echo ' <div class="col-lg-8"> <div class="row"> <form class="form" method="post" enctype="multipart/form-data">';
                  echo '<div class="form-group">';
                  echo ' <label for="Iname">Item name :</label>';
                  echo ' <input name="Iname" id = "Iname" type="text" class="form-control"  value=" ' . $row['title'] . '">';
                  echo ' </div> ';
                  echo ' <div class="form-group">  ';
                  echo ' <label for="Idesc">Item description :</label>';
                  echo ' <input name="Idesc" id="Idesc" maxlength="500" class="form-control" value=" ' . $row['FDescription'] . '"> </input>';
                  echo ' </div>';
                  echo ' <div class="form-group"> ';
                  echo ' <label for="Iimg"> Add image : ';
                  echo ' <input type="file" id="img" name="img" accept="image/" class="form-control">';
                  echo ' </div>';
                  echo ' </label> ';
                  echo ' <button type="submit" name="submit" id="submit" class="btn btn-default button" value="submit"> Submit</button>';
                  echo ' </form></div></div></div></div>' ;
                  ?>
                        <br>
  <footer class="site-footer" >
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Our site provide facilites to sell and buy online, you can sell products throu our site, and you can find anything to buy from other seller. SO ENJOY IN OUR SITE!</p>
          </div>

          <div class="col-xs-6 col-md-3">
          
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
            <li><a href="indexLogedIn.php">Home</a></li>
            <li><a href="contact_loged.php">Contact</a></li>
              <li><a href="about_us_loged.php">About Us</a></li>
              
            
              
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
         <a href="indexLogedIn.php">eBuy</a>.
            </p>
          </div>

        
        </div>
      </div>
</footer>
            </body>
        </html>
        <script>  
                $(document).ready(function(){  
                     $('#submit').click(function(){  
                         var  item_name = $('#Iname').val() ;
                         var  item_desc = $('#Idesc').val() ;
                         var  item_img = $('#img').val() ;
                           
                            if( item_name== '' || item_desc == '' )  
                                {  
                                   alert("Please insert item informations");  
                                   return false;  
                                }  
                             else  
                                {  
                                  if(item_img == '' ){
                                    header("Location:EditpageNoimage.php?id=" .$_GET['id']);
                                  }else{}
                                  var extension = $('#img').val().split('.').pop().toLowerCase();  
                                  if(jQuery.inArray(extension, ['png','jpg','jpeg']) == -1)  
                                 {  
                                  alert('Invalid Image File');  
                                  $('#img').val('');  
                                   return false;  
                                  }  
                                 }  
                                }
                                                      });  
                                             });  
                 </script>  