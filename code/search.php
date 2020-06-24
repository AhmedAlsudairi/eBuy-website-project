<!DOCTYPE html>

<html>
    <head>
        <!-- connect to data base-->
        
    <?php 
    $con= new mysqli("localhost","root","","swe381project");
if (mysqli_connect_errno($con)){
  echo "Failed to connect to MySQL: ".mysqli_connect_error();} 

?>

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
  <nav class="navbar navbar-secondary">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a class="navbar-brand" href="index.php">eBuy</a>      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="defaultNavbar1">
        <ul class="nav navbar-nav">
          <li ><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
			
          <li><a href="contact.php">Contact</a></li>
          <li><a href="about_us.php">About us</a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search" method="post" action="search.php"> 
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search" name="search">
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="login.php" > <span class="glyphicon glyphicon-log-in"></span> Signin</a></li>
          <li><a href="signup.php"  > <span class="glyphicon glyphicon-user"></span> Signup</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
</nav>

		<br>
		
	  <!--main page-->
      <div class="container">

        <div class="row">
    
          <div class="col-lg-3">
            <h1 class="my-4">The result</h1>
           
    
          </div>
          <!-- /.col-lg-3 -->
    
          <div class="col-lg-9">
    
    
            <div class="row">
            <?php 
            $serach=$_POST["search"];
            $query="SELECT * FROM item WHERE title LIKE'%$serach%' ORDER BY time DESC";
           $result=mysqli_query($con,$query);
           
           
           if(!mysqli_num_rows($result)){
            echo("<div class='alert alert-danger' role='alert'>No results found</div>");
           }
           while($row=mysqli_fetch_array($result)){
           
            echo '<div class="col-lg-9 col-md-9 mb-9">
                <div class="card h-100">
                  <a href="#"></a>
                  <div class="card-body">
                    <h4 class="card-title border-0">
                      <a href="login.php?log=Sign in to see full description!" class="list-group-item list-group-item-action list-group-item-light">'.$row['title'].'</a>
                    </h4>
                    
                    <p class="card-text">'.$row['MDescription'].'...</p>
                  </div>
                  <button type="button" class="btn btn-outline-secondary">'.$row['FKuser'].'</button>
                  <div class="card-footer"><small class="text-muted">'.$row['time'].'</small></div>
                </div>
              </div>';
          }
          
         
?>
            </div>
            <!-- /.row -->
    
          </div>
          <!-- /.col-lg-9 -->
    
        </div>
        <!-- /.row -->
    
      </div>
      <!-- /.container -->
  
   <!-- Footer -->
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