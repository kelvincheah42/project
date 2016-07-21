<html>
         <?php
    include('header.php');
    
?>
    <title>Handa-Kun</title>
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
                <h1>Handa-Kun</h1>
                 <div class=" col-md-6" >
                     <a class="video"  title="PV"  href="https://www.youtube.com/watch?v=sb5fNGloCn0"><img src="img/h.jpg"/></span></a>
                  
       
     
    </div>
                <!-- Preview Image -->
                <div class=" col-xs-6" >
                 <img class="img-responsive" src="img/handa.jpg">
                </div>
                <hr>
                 <font>
                <!-- Post Content -->
                <p class="lead">Set six years prior to the events of Barakamon, detailing the life of Seishuu Handa as a high school student—and a very interesting life it is.

In Handa-kun, Seishuu Handa is admired by his peers as a calligraphy genius and given the utmost respect, but Handa-kun himself is under the mistaken impression that the deference and attention he receives from the other students is actually bullying. Handa just wants to live a quiet life, but hilarity ensues as one character after another challenges his position as the school idol, and somehow comes away as a fan all while Handa is horrified and clueless.</p>
                <hr>
                <h2>Main Character</h2>
              
                 <ul>
                <li>
                    Sei Handa <br>
  A disgraced calligrapher who punched out an old man who criticized his calligraphy style as "academic." He goes to the Goto Islands in Nagasaki at the suggestion of his famous calligrapher father to focus more on his calligraphy as he waits out his exile. Along the way, he finds value in interactions with other people, in particular a tomboyish kid named Naru, and finds his inspiration and own personal style.

At first, Naru calls him "Junon Boy," referring to a particular magazine that features street pictures of male idols, suggesting (incorrectly) that he's a city-dwelling pretty boy of the kind that don't really exist in real life. Later on, she calls him, "Sensei."

Sei Handa appears again in another manga titled Handa-kun, a prequel of sorts featuring Handa during his high school years. In the prequel, he was a well-regarded school idol and prodigy calligrapher who held the hilariously mistaken belief that no one liked him and that the distantly worshipful actions of his peers were in fact bullying. This is apparently the fault of his best friend of both series, Kawafuji, who told him a lie that he was disliked as a joke, which Handa mistook for the truth, and his friend never corrected because he found it funny.
                 </li>
                 <li>
                     Reo Nikaidou<br>
Leo was the target of all the girls due to his good looks and working as a model.
When tailing Handa to find out his secret of popularity Leo ends up being misunderstood by Handa and being pitied by him, for which he thinks Handa is a pure guy.
                 </li>
                 <li>
                     Junichi Aizawa<br>
Aizawa Junichi had been the class rep for all the 10 years of his school, for his excellent sense for leadership.

When deciding for the class rep, Handa, who was chosen as a candidate while he was taking a nap, quits right after being chosen as class rep, leaving Aizawa as the class rep.
                 </li>
                 <li>
                     Takao Kawafuji<br>
Seishuu's friend who takes care of his calligraphy and other needs. He later on starts living at the Goto Islands together with Seishuu and Kousuke. 

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
                if($postid==6){
                    ?>
                <form role="form" action="handa.php" method="post" id="reply">
       <div class="media">
                    <div class="media-body">
                         <h4 class="media-heading">
                            <?php echo $row['username']?><small id="tt"> <?php echo $row['timestamp']?></small></h4>
     <?php echo $row['comment']?><a href="handa.php?delete=<?php echo $row['ID'] ?>" id="de" onclick="return confirm('Are you sure delete this comment?')">X</a></div>
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
window.location.href='handa.php?id=6';
</script>";}}
            if($type!=1){
                   echo "<script>
alert('Only Admin allow to delete');
window.location.href='handa.php?id=6';
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
Aired: Jul 2, 2016 to ?
Premiered: Summer 2016
Broadcast: Saturdays at 22:00 (JST)
Producers: None found, add some
Licensors: Sentai Filmworks
Studios: J.C.Staff
Source: Manga
Genres: Ecchi, School, Shounen
Duration: 24 min. per ep.
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
