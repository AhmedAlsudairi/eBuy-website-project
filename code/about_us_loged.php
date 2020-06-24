<!DOCTYPE html>
<?php
    session_start();
if(!isset($_SESSION['username']))
    header('location:login.php?error=Please signin again!');
?>
<html>
    <head>
    <title>eBuy</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/sheet.css">
        <script typy="text/javascript" src="script/script.js"></script>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

    <body style="padding-top: 70px">
    <nav class="navbar navbar-default navbar-fixed-top">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a class="navbar-brand" href="indexLogedIn.php">eBuy</a>      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="defaultNavbar1">
        <ul class="nav navbar-nav">
          <li ><a href="indexLogedIn.php">Home<span class="sr-only">(current)</span></a></li>
			
          <li><a href="contact_loged.php">Contact</a></li>
          <li class="active"><a href="about_us_loged.php">About us</a></li>
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
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
</nav>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
          <h1 class="display-4" id="greeting"></h1>
          <p class="lead">You can buy anything you want and you can sell, enjoy!<br>
          </p>
  </div>
    </div>
      
		
	  <div id="carousel1" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carousel1" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel1" data-slide-to="1"></li>
		    <li data-target="#carousel1" data-slide-to="2"></li>
	    </ol>
		  <div class="carousel-inner" role="listbox">
		    <div class="item active"><img src="images/i2.jpg" alt="First slide image" class="center-block">
		      <div class="carousel-caption">
		        <h3>weclcome to eBuy</h3>
		        
	          </div>
	        </div>
		    <div class="item"><img src="images/i1.jpg" alt="Second slide image" class="center-block">
		      <div class="carousel-caption">
		        <h3>You can buy</h3>
		        
	          </div>
	        </div>
		    <div class="item"><img src="images/i4.jpg" alt="Third slide image" class="center-block">
		      <div class="carousel-caption">
		        <h3>You can sell</h3>
		        
	          </div>
	        </div>
	    </div>
		  <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>
	
		<br>
        
		
	  <!--main page-->
      <div class="container">

        <div class="row">
    
         <div class="col-lg-12">
			 
			 <h3>sell &amp;&amp; buy</h3>
			 <p>we are student of king saud university, and this site is project for SWE web application devlopement course. Our website provide facilites to sell and buy online, you can sell products throu our site, and you can find anything to buy from other seller. SO ENJOY IN OUR SITE!</p>
			</div>
    
        </div>
        <!-- /.row -->
    
      </div>
      <!-- /.container -->
    <ul class="pager">
      <nav>
        <nav> </nav>
      </nav>
    </ul>

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