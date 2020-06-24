
<html lang="en"> 
        <head>
            <title> LogIn Page</title>
            <meta charset="utf-8">
         <<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
         
                      
         <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">
        
         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
         <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
         <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
         <meta name="theme-color" content="#563d7c">
         <link href="bootstrap/css/signin.css" rel="stylesheet">
         <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
        <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
        <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
        <meta name="theme-color" content="#563d7c">
    
          
        <link rel ="stylesheet" href="styleSign.css">

        
        </head>

        <body>

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
          <li class="Active"><a href="login.php" > <span class="glyphicon glyphicon-log-in"></span> Signin</a></li>
          <li><a href="signup.php"  > <span class="glyphicon glyphicon-user"></span> Signup</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
</nav>

                <div class="signin">
                                <img src="pics/login.jpg" class="avatar">
                                <form method="post" action="checkLogin.php">
                                <?php 
                                if (isset($_GET['bye'])) {
                        echo("<div class='alert alert-success' role='alert'>" . $_GET['bye'] . "</div>");
    }
                                                 ?>
                                  <?php
                                        if (isset($_GET['error'])) {
                                                echo("<div class='alert alert-danger' role='alert'>" . $_GET['error'] . "</div>");
                                        }
                                        if (isset($_GET['log'])) {
                                                echo("<div class='alert alert-warning' role='alert'>" . $_GET['log'] . "</div>");
                                        }

                                                   ?>
                                                   <?php
                                                    if (isset($_GET['signup_success'])) {
                                  echo("<div class='alert alert-success' role='alert'>" . $_GET['signup_success'] . "</div>");
    }
                                                 ?>
                        <h2 style ="color:white ; padding-bottom: 20px; text-align: center; " >Sign In </h2>
                                        
                                <input type ="text" name ="username" placeholder ="Username" required autofocus><br><br>
                                <input type = "password" name="pass" placeholder="Password" required><br><br>
                                
                                <a href=""><input type ="submit" value="Log In" class="btn btn-lg btn-primary btn-block"></a>
                                
                                        <div id="container">
                                             

                                             <p style="color:white;"  ></p> Don't have account?<a href="signup.php">&nbsp;Sign Up</a> 
                                        </p>
                                          </div><br><br><br><br>
                                         
                                </form>
                </div>
          
        </body>
</html>