<?php
session_start();
if(!isset($_SESSION['username']))
    header('location:login.php?error=Please signin again!');
?>
<?php
$con= new mysqli("localhost","root","","swe381project");
$id = $_GET['itemId'];
$query = "select * from item where id='$id'";
$result = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Product page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            // $(document).ready(function(){
            //                     $("#interist").click(function(){
            //                                             $("#hidden").slideToggle(200);
            //                     });
            // });
        </script>
        
        
        <!--  -->
        <style>
        
html {
  position: relative;
  min-height: 100%;
}
body{
  margin: 0 0 250px;
  /* bottom = footer height */
  
  font-family: Georgia, 'Times New Roman', Times, serif;
}
  .site-footer
{
    
  position: absolute;
  left: 0;
  bottom: 0;
  
  width: 100%;
  overflow: hidden;
  background-color:#f0f0f0;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#000000;
}
.site-footer hr
{
  border-top-color:rgb(0, 0, 0);
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:rgb(0, 0, 0);
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#000000;
}
.site-footer a:hover
{
  color:#6d6d6d;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#000000
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
    color:#6d6d6d;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}

        </style>
        <!--  -->
    </head>
    <body style="background-color: #ECF0F1;" >
    <?php
        $rows = mysqli_fetch_array($result);
        $id = $rows['id'];
        if($_SESSION['username'] == $rows['FKuser']){
            header("location:ownItem.php?itemId=$id");
        }
    ?>
    <div class = "container-fluid">
        <div class = "row">    
            <div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- <nav class="navbar navbar-dark bg-dark" >
                    <a class="navbar-brand" href="#">
                        <button type="button" class="btn btn-outline-light"><img src="icons-1.0.0-alpha2\icons\chevron-left.svg" width="20" height="20" class="d-inline-block align-top" alt="" >&nbsp; back &nbsp; </button>
                    </a>
                </nav> -->
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
                                </ul>
                                <form class="form-inline " role="search" method="post" action="search_loged.php"> 
                                    <input type="text" class="form-control mr-sm-2" placeholder="Search" name="search">
                                <button type="submit" class="btn btn-light">Search</button>
                                </form>
                                <ul class="nav navbar-nav navbar-right">
          
                                <a href="AddPage.php"> <button type="button" class="btn btn-default">Add product <span>&#43;</span></button> </a>
                                     <div class="btn-group">
                                     <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['username'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
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
            </div>
        </div>   
        <div class = "row">     
        <!-- echo' <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).' -->
                <h1></h1><br>
                <div class = "col-lg-2 col-md-2 col-sm-1"></div>
                <div class="card col-lg-8 col-md-8 col-sm-10" style="width: 50rem;height: 65rem; ">
                    <!-- <img src= images/myimage.png class="card-img-top" alt="..."> -->
                    <h1></h1><br>
                    <?php echo' <img src="data:image/jpeg;base64,'.base64_encode($rows['image'] ).'" class="card-img-top" alt=". . ."  >';?>
                    <div class="card-body">
                    <h5 class="card-title"><strong><?php echo $rows['title']; ?></strong></h5>
                    <p class="card-text" ><?php echo $rows['FDescription']; ?></p>
                    <br>
                    <form method = "post" action = "interest.php" >
                        <input type ="text" name ="item-id" style="display: none;" value = <?php echo $rows['id']; ?>>
                        <?php 
                          $user = $_SESSION['username'];
                          $id = $_GET['itemId'];;
                          $check = "SELECT itemid, InstrestedAcc FROM interest WHERE itemid='$id' AND InstrestedAcc='$user'";
                          $re = mysqli_query($con,$check);
                          $ro = mysqli_num_rows($re);
                          if($ro == 0){
                            echo"<button name = 'interest' type = 'submit' class='btn btn-outline-dark'>interest &nbsp; <img src='icons-1.0.0-alpha2\icons\star.svg' width='30' height='30' class='d-inline-block align-top' alt='' ></button>";
                          }else{
                            echo"<button name = 'interest' type = 'submit' class='btn btn-outline-dark'>interested </button>";
                          }
                        ?>
                    </form>
                    <!-- <button name = "interest" type = "button" class="btn btn-outline-dark">interest &nbsp; <img src="icons-1.0.0-alpha2\icons\star.svg" width="30" height="30" class="d-inline-block align-top" alt="" ></button> -->
                    
                    <br>
                    <?php
                        $username1 = $rows['FKuser'] ;
                        $sql = "SELECT email FROM account WHERE username = '$username1'" ;
                        $getEmail = mysqli_query($con,$sql);
                        $emails = mysqli_fetch_array($getEmail);
                    ?>
                    <p>E-Mail : <?php echo $emails['email']; ?></p>
                    <form method = "post" action = "loadMessagingPage.php" >
                        <input type ="text" name ="userAcc" style="display: none;" value = <?php echo $rows['FKuser']; ?>>
                        <button type = "submit" class="btn btn-outline-dark">direct messaging &nbsp; <img src="icons-1.0.0-alpha2\icons\envelope-open.svg" width="30" height="30" class="d-inline-block align-top" alt="" ></button>
                    </form>    
                </div>
                <div class = "col-lg-2 col-md-2 col-sm-1"></div>
        </div>    
    </div>  
    <!-- Footer -->
                        <br>
                        <footer class="site-footer" style = "background-color: #F8F8F8;">
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
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="about_us.php">About Us</a></li>
                                    
                                    
                                    
                                    </ul>
                                </div>
                                </div>
                                <hr>
                            </div>
                            <div class="container">
                                <div class="row">
                                <div class="col-md-8 col-sm-6 col-xs-12">
                                    <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
                                <a href="index.php">eBuy</a>.
                                    </p>
                                </div>

                                
                                </div>
                            </div>
                        </footer>
    </body>
</html>
