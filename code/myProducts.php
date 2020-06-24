

<!DOCTYPE html>
<?php
    session_start();
if(!isset($_SESSION['username']))
    header('location:login.php?error=Please signin again!');
?>
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
        
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

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
                <li class="active" role="presentation"><a href="myProducts.php">My products</a></li>
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

		<br>
    <div class="container">

<div class="row">
    <?php
    if(isset($_GET['message'])){
      $mes = $_GET['message'] ;
      echo("<div class='alert alert-success' role='alert'>".$mes."</div>");
    }
    
    ?>
    </div>
    </div>
	  <!--main page-->
      <div class="container">

        <div class="row">
    
          <div class="col-lg-3">
            <h1 class="my-4">My products</h1>
          
    
          </div>
          <!-- /.col-lg-3 -->
    
          <div class="col-lg-9">
    
    
          <?php 
    $user=$_SESSION["username"];
            $query="SELECT * FROM item WHERE FKuser='$user' ORDER BY time DESC";
           $result=mysqli_query($con,$query);
           

           if(!mysqli_num_rows($result)){
            echo("<div class='alert alert-danger' role='alert'>No products found</div>");
           }
           
          while($row=mysqli_fetch_array($result)){
            $_SESSION['id']=$row['id'];
            echo '<div class="col-lg-9 col-md-9 mb-9">
                <div class="card h-100">
                  <a href="#"></a>
                  <div class="card-body">
                    <h4 class="card-title border-0">
                      <a href="productPage.php?itemId='.$row['id'].'" class="list-group-item list-group-item-action list-group-item-light">'.$row['title'].'</a>
                      
                    </h4>
                    
                    <p class="card-text">'.$row['MDescription'].'...</p>
                  </div>
                  
                  <div class="card-footer"><small class="text-muted">'.$row['time'].'</small></div>';
                  echo '<a href="DeletePage.php?id='.$row['id'].'" class="btn btn-danger" onClick=\'javascript: return confirm("Are you sure?");\' >Delete</a> <a href="EditPage.php?id='.$row['id'].'" class="btn btn-primary ">Edit</a> 
                </div>
              </div>';
          }
          

          /*while($row=mysqli_fetch_array($result)){
           echo '<div class="card border-pr">
           
           <div class="card-body">
             <h4 class="card-title">'.$row['name'].'</h4>
             <p class="card-text">'.$row['description'].'</p>
             
             <a href="#" class="btn btn-primary ">See full description</a>
           </div>
         </div>
         <div class="card-footer text-muted">
         '.$row['date'].'
       </div>';
          }*/

         
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