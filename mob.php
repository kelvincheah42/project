<html>
         <?php
    include('header.php');
    
?>
        <title>Mob Psycho 100</title>
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
                <h1>Mob Psycho 100</h1>
                 <div class=" col-md-6" >
                     <a class="video"  title="PV"  href="https://www.youtube.com/watch?v=F8g3TuKsQHs"><img src="img/1.jpg"/></span></a>
                  
     
     
    </div>
                <!-- Preview Image -->
                <div class=" col-xs-6" >
                    <img class="img-responsive" src="img/100.jpg">
                </div>
                <hr>
                 <font>
                <!-- Anime Content -->
                <p class="lead">
Kageyama Shigeo (a.k.a. "Mob") is a 8th grader with psychic abilities. He could bend spoons and lift objects with his mind from a young age, but he slowly began to withhold from using his abilities in public due to the negative attention he kept receiving. Now, the only thing he wants is to become friends with a girl in his class, Tsubomi. With his psychic "mentor" (who has no psychic powers), he continues his daily life, attempting to realize his purpose in life. 
                    </p>
                <hr>
                <h2>Main Character</h2>
                 <ul>
                <li>
                    Kageyama Shigeo<br>
Voiced by: Setsuo Ito
The main protagonist, an eighth grader nicknamed Mob, is an incredible Esper with powerful psychic abilities. Helmet hairstyle is his defining physical feature. He is not good at reading the atmosphere, and since childhood, he has rarely felt or displayed intense emotion. He thinks his power is not necessary in his life, so he avoids using it. He suppresses his emotions to keep his power in control; when the percentage of his accumulated feelings reaches 100, he will "explode." He works at Reigen's spirit counsel for 300 yen an hour. When he was asked to join the Telepathy Club so they wouldn't be disbanded, he was introduced to the Body Improvement Club, which he then joined to become popular.
                </li>
                <li>
Reigen Arataka<br>
Voiced by: Takahiro Sakurai<br>
Mob's master, a self-proclaimed psychic who has his own spirit counsel (the "Talk About Spirits Agency"), which is cheap compared to competitors. He wasn't getting much business, but after setting up a homepage on the internet, the amount of assignments has increased. He is essentially a con artist and excels in persuasion, speech, and perception, as well as massage and whack-a-mole. He is clever and agile, claiming to have a greenbelt of Shaolin boxing. He is very afraid of cockroaches and likes dogs. He solves his clients' problems with a variety of skills (including Reigen's "secret technique"); if that doesn't work, he'll call in Mob to deal with it. Even though he is a fraud, he treats Mob's inner turmoil very seriously, and gives him pertinent suggestions. For better or worse, he is Mob's mentor.
                </li>
                <li>
                    Dimple<br>
                    Voiced by: Akio Ōtsuka<br>
An upper class evil spirit, devious and sly, characterized by the circular blush on his cheeks. In order to become a god worshiped by people, he established a religion/cult called (LOL), which was dissolved by Mob. After his defeat, his power fell off remarkably, and Mob came to regard him as reasonably harmless. Dimple thinks Mob might be a great springboard to god, so he stayed with Mob in order to exploit him, however this plan failed. Later in the series, he attempts the same thing with Mob's brother, Ritsu. Dimple claims to be Mob's partner. He can possess the bodies of others and release the full potential of his host, but he tries to avoid breaking the host's body.
                </li>
                <li>
Kageyama Ritsu<br>
Voiced by: Miyu Irino<br>
Mob's younger brother, grade 7. He is clever and competent, excelling at both academic and athletic performance. Having a handsome face, he is popular among girls. He is also a member of the Student Council. The only thing he's lacking is psychic power. Because Mob is a strong Esper, Ritsu has always had an inferiority complex and an obsessive longing for psychic power of his own. Carries around spoons to try and bend with his mind. He eventually developed his own psychic power and became a fairly powerful esper but not as powerful as his big brother.
                <li>
Hanazawa Teruki<br>
Voiced by: Yoshitsugu Matsuoka<br>
Black Vinegar Middle School's "ura banchou" ("hidden boss"), known to most as Teru. Also a strong Esper, he originally held scorn for people without psychic power, calling them "commoners." Accustomed to using his power freely in daily life, be it exams or sports, he excels at it all. Coupled with his handsome looks, he is very popular. He'll do a pigeon-toed pose when he fights seriously. After he is lectured and defeated by Mob, his perspective on psychic power changes, and he becomes more friendly to others.
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
              
              <?php
 include('mysqli_connect.php');
$query ="SELECT ID,username,comment,timestamp,post_id FROM comments ORDER BY ID";
$result = mysqli_query($MySQLi_CON, $query);
while($row=mysqli_fetch_array($result)) {
    ?>
                 <?php
                $postid=$row['post_id'];
                if($postid==8){
                    ?>
                <form role="form" action="mob.php" method="post" id="reply">
       <div class="media">
                    <div class="media-body">
                         <h4 class="media-heading">
                            <?php echo $row['username']?><small id="tt"> <?php echo $row['timestamp']?></small></h4>
     <?php echo $row['comment']?><a href="mob.php?delete=<?php echo $row['ID'] ?>" id="de" onclick="return confirm('Are you sure delete this comment?')">X</a></div>
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
window.location.href='mob.php?id=8';
</script>";}}
            if($type!=1){
                   echo "<script>
alert('Only Admin allow to delete');
window.location.href='mob.php?id=8';
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
Episodes: Unknown
Status: Not yet aired
Aired: Jul 12, 2016 to ?
Premiered: Summer 2016
Broadcast: Tuesdays at 00:00 (JST)
Producers: Warner Bros.
Licensors: None found, add some
Studios: Bones
Source: Web manga
Genres: Action, Comedy, Shounen, Slice of Life, Supernatural
Duration: 24 min.
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
