<html>
          <?php
    include('header.php');
    
?>
        <title>Orange</title>
        <script src="js/jquery-3.0.0.js"></script>
    <script src="js/bootshape.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
      <link href="css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Duru+Sans|Actor' rel='stylesheet' type='text/css'>
     <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="css/bootshape.css" rel="stylesheet">
	<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    <script type="text/javascript" src="fancybox/video.js"></script>
 <!-- Navigation bar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="index.php"><span class="green">Anime</span><span class="blue"> Sekai</span></a>
        </div>
        <nav role="navigation" class="collapse navbar-collapse navbar-right">
          <ul class="navbar-nav nav">
            <li class="active"><a href="index.php">Home</a></li>
              <li><a href="anime.php">Anime</a></li>
              <li><a href="animemusic.php">Anime Music</a></li>
                <!-- Check if  User login, the navigation bar will change to username and logout -->
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
            <form action="search.php" class="search-form" method="post">
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
    </div><!-- End Navigation bar -->
    
     <!-- Page Content -->
     <body class="relife-bg">
         <font>
    <div class="container">

        <div class="row">
            <div class="col-lg-8">

                <!-- Title -->
                <h1>Orange</h1>
                 <div class=" col-md-6" >
                     <a class="video"  title="PV"  href="https://www.youtube.com/watch?v=RU2mPHp9Btk"><img src="img/o.jpg"/></span></a>
                  
     
     
    </div>
                <!-- Preview Image -->
                <div class=" col-xs-6" >
                    <img class="img-responsive" src="img/orange.jpg">
                </div>
                <hr>
                 <font>
                <!-- Anime Content -->
                <p class="lead">
One day, Naho Takamiya receives a letter written to herself from ten years in the future. As Naho reads on, the letter recites the exact events of the day, including the transfer of a new student into her class named Kakeru Naruse.

The Naho from ten years later repeatedly states that she has many regrets, and she wants to fix these by making sure the Naho from the past can make the right decisions—especially regarding Kakeru. What's more shocking is that she discovers that ten years later, Kakeru will no longer be with them. Future Naho asks her to watch over him closely.
                    </p>
                <hr>
                <h2>Main Character</h2>
                 <ul>
                <li>
                    Hiroto Suwa<br>
                    Birthday: November 27<br>

Suwa is Naho and Kakeru's classmate and friend. He is very energetic and outgoing and he loves to hang out with his friends. He likes Naho but knows she likes Kakeru, so he supports them both. Suwa will become a very important person to her in her future, but 16-year-old Naho doesn't know yet. 
                 </li>
                 <li>
                     Kakeru Naruse<br>
                     Birthday: September 14<br>

Naho's classmate, Kakeru is the boy that she likes. He has several issues regarding his family and he was apparently lonely until he joined Naho's group of friends. It is revealed in the first chapter that he will die in an accident, but there is a possibility to change his future and the only one who can save him is Naho.
        </li>
        <li>
            Naho Takamiya<br>
Naho is a kind, shy girl that has a crush on her classmate Kakeru. She receives a letter from her future self telling her that to watch over Kakeru closely as he is going to die. To avoid a lifetime of regret, Naho has to change her reserved disposition—but this is much easier said than done.
        </li>
                 </ul>
                </font>
      <!-- Save User Comment -->
      <?php
	   include ('mysqli_connect.php');
	
                if(isset($_POST['submit']))
           {
                    if(isset($_SESSION['login_user']) )
	{
             
             $comment = $MySQLi_CON->real_escape_string(trim($_POST['comment']));
              $uname = $MySQLi_CON->real_escape_string(trim($_SESSION['login_user']));
                $articleid = $_GET['id'];
	$query = "INSERT INTO comments(username,comment,post_id) VALUES( '$uname','$comment',$articleid)";
        if($MySQLi_CON->query($query))
		{
          $msg = "<div class='alert alert-success'>
	<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Thank you for the comment!
					</div>";
            
        }
        else{
            $msg = "<div class='alert alert-danger'>
	<span class='glyphicon glyphicon-info-sign'></span> &nbsp; cannot comment !
				</div>";
        }  
           }
        }
            if(!isset($_SESSION['login_user']) &&(isset($_POST['submit'])))
           {
	{
                   echo "<script>
alert('Please Login Your Account to comments');
window.location.href='login.php';
</script>";
	  
	}
        }
           
        $MySQLi_CON->close();
        
            ?>   

                <!-- Comments Form -->
                   <form role="form" id="comment" method="post" onsubmit="return show_alert()"  >  
                  <?php
		if(isset($msg)){
			echo $msg;
		}
		?>
                    <div class="form-group">
    <label for="comment">Comment:</label>
    <textarea class="form-control" rows="5" cols="100%" name="comment" ></textarea>
<input type='hidden' name='id' id='articleid' value='<?php echo $_GET["id"]; ?>' />
                 <script type="text/javascript">
function show_alert() {
  if(confirm("Do you confirm to comments?"))
    document.forms[0].submit();
  else
    return false;
}
</script>
                        <button type="submit"  class="btn btn-primary" name="submit">Submit</button>
                   
                </div></form>
                <hr>

                <!-- Show User Comment -->
              <?php
 include('mysqli_connect.php');
$query ="SELECT ID,username,comment,timestamp,post_id FROM comments ORDER BY ID";
$result = mysqli_query($MySQLi_CON, $query);
while($row=mysqli_fetch_array($result)) {
    ?>
                 <?php
                $postid=$row['post_id'];
                if($postid==7){
                    ?>
                <form role="form" action="orange.php" method="post" id="reply">
       <div class="media">
                    <div class="media-body">
                         <h4 class="media-heading">
                            <?php echo $row['username']?><small id="tt"> <?php echo $row['timestamp']?></small></h4>
     <?php echo $row['comment']?><a href="orange.php?delete=<?php echo $row['ID'] ?>" id="de"  onclick="return confirm('Are you sure delete this comment?')">X</a></div>
    </div></form>
    <?php
} 
}
if(isset($_SESSION['login_user']) )
	{
// Only admin allow to delete comment else alert message
$uname = $MySQLi_CON->real_escape_string(trim($_SESSION['login_user']));
$res ="SELECT * FROM user where username='$uname' ";
$result1=mysqli_query( $MySQLi_CON,$res);
$row=mysqli_fetch_array($result1);
if (!$result1) {
 printf("Error: %s\n", mysqli_error($MySQLi_CON));
    exit();
}
  $type = $row['level'];
    if(isset($_GET['delete'])){
    if($type==1){      
$deleteq="DELETE FROM comments WHERE ID={$_GET['delete']} LIMIT 1";
            $deleter=mysqli_query($MySQLi_CON, $deleteq);
            if($deleter){
      echo "<script>
window.location.href='orange.php?id=7';
</script>";}}
            if($type!=1){
                   echo "<script>
alert('Only Admin allow to delete');
window.location.href='orange.php?id=7';
</script>";
            }
        
    }
        }
        
$MySQLi_CON->close();
          
?>
   
              
            </div>
       
            <div class="col-md-4">

               
                <div class="well" id="info">
                    <h4>Information</h4>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                       Type: TV
Episodes: 13
Status: Currently Airing
Aired: Jul 4, 2016 to ?
Premiered: Summer 2016
Broadcast: Mondays at 00:00 (JST)
Producers: TMS Entertainment, DAX Production, TOHO animation, ABC Animation
Licensors: None found, add some
Studios: Telecom Animation Film
Source: Manga
Genres: Drama, Romance, School, Sci-Fi, Shoujo
Duration: 23 min. per ep.
Rating: PG-13 - Teens 13 or older
                        </div>
                     
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                   <div class="modal modal-transparent fade">
           
          <div class="ca">
             
          </div>
        </div>

            </div>

        </div>
        <!-- /.row -->
     <?php
    include('footer.php');
    
?>

    </div>
    <!-- /.container -->
    </font>
</body>

</html>
