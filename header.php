 <?php 
session_start();
?>
  <head>
      
    <script src="js/jquery-3.0.0.js"></script>
    <script src="js/bootshape.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
      <link href="css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Duru+Sans|Actor' rel='stylesheet' type='text/css'>
     <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="css/bootshape.css" rel="stylesheet">
	<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    <script type="text/javascript" src="fancybox/video.js"></script>
     

  </head>
    <!-- Navigation bar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation" >
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="index.php"><span class="green">Anime</span><span class="blue"> Sekai</span></a>
        </div>
        <nav role="navigation" class="collapse navbar-collapse navbar-right">
          <ul class="navbar-nav nav">
            <li><a href="index.php">Home</a></li>
              <li><a href="anime.php">Anime</a></li>
              <li><a href="animemusic.php">Anime Music</a></li>
               <?php
	
	if(isset($_SESSION['login_user']) && isset($_SESSION['mytype1']) )
	{
	$login_session=$_SESSION['login_user'];
	echo '<li ><a href="admin.php" id="welcome">'.$login_session.'</a></li>'
                 .'<li><a href="logout.php">Logout</a>'.'</li>';
	}
       else if(isset($_SESSION['login_user']) && isset($_SESSION['mytype']) )
	{
	$login_session=$_SESSION['login_user'];
	echo '<li ><a href="user.php" id="welcome">'.$login_session.'</a></li>'
                 .'<li><a href="logout.php">Logout</a>'.'</li>';
                
        
	}
        else{
           echo '<li><a href="login.php">Login</a>'.'</li>'
                   . '<li><a href="register.php">Sign Up</a>'.'</li>';
        }
      
	?>
	
         
           
            <li>
                <form action="search.php" class="search-form" method="post" >
                <div class="form-group has-feedback">
            		<label for="search" class="sr-only">Search</label>
            		<input type="text" class="form-control" name="search" id="search" placeholder="search" >
              		<span class="glyphicon glyphicon-search form-control-feedback"></span>
            	</div>
            </form>
    </li>
          </ul>
        </nav>
      </div>
    </div>
 <!-- End Navigation bar -->