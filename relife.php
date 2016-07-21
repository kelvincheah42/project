<html>
      <?php
    include('header.php');
	?>
    <title>ReLife</title>
      
    
     <!-- Page Content -->
     <body class="relife-bg">
         <font>
         <div class="container">

        <div class="row">
            <div class="col-lg-8">

                <!-- Title -->
                <h1>ReLife</h1>
                 <div class=" col-md-6" >
                     <a class="video"  title="PV"  href="https://www.youtube.com/watch?v=fZCgXuxMAZY"><img src="img/pv.jpg"/></span></a>
                  
   
     
    </div>
                <!-- Preview Image -->
                <div class=" col-xs-6" >
                 <img class="img-responsive" src="img/re.jpg">
                </div>
                <hr>
                 <font>
                <!-- Anime Content -->
                <p class="lead">The story follows Kaizaki Arata, a 27-year-old jobless man, who fails at every job interview he had after quitting his last company. His life changes after he met Yoake Ryou of the ReLife Research Institute, who offered him a drug that can change his appearance to 17-years-old and to become a subject in an experiment for one year. Thus, he begins his life as a high school student once more.</p>
                <hr>
                <h2>Main Character</h2>
              
                 <ul>
                <li>
                    Arata Kaizaki<br>
                    Voiced by: Kenshō Ono<br>
                He is a 27-year-old man with a painful past. He graduated college and started working at a company where an older female co-worker, Saiki, was being harassed by her male co-workers. He tried to help her, but that only increased the harassment, leading to Saiki rejecting his help and eventually her suicide. This tragedy left him traumatized and he subsequently quit his job. After several failed job opportunities in similar companies, he worked part-time at a convenience store where he was scouted by Onoya An who chose him for the ReLife Project, a scientific experiment to rejuvenate him 10 years and send him back to high school as a student. Apparently, the experiment is supposed to provide a chance to experience youth once again and, in the process, fix whatever's wrong with the subject's life. The surname comes from Kaizaki Station.
                </li>
                 <li>
                     Chizuru Hishiro<br>
                     Voiced by: Ai Kayano<br>
                  She is a very smart female high school student. She usually has the top grades in her class which gives her the right to become the class representative and have all her school expenses paid for. She's also extremely socially awkward, and fairly ignorant in anything not directly related to school matters, particularly social and emotional ones, so she's always doing online research on whatever she doesn't understand about these. It is revealed that she is Project #001, Yoake's first project before Kaizaki. The surname comes from Hishiro Station.
                </li>
                 <li>
                     Ryō Yoake<br>
                     Voiced by: Ryohei Kimura<br>
               He is Kaizaki's senior supervisor, a man of about Kaizaki's age who is always seemingly cheerful (which in fact irritates Kaizaki to no end). He watches over Kaizaki and his circle of friends from a distance and records everything for the ReLife project. The surname comes from Yoake Station.
                 </li>
                 <li>
               An Onoya<br>
               Voiced by: Reina Ueda<br>
               She is Kaizaki's junior supervisor and the one who scouted him for the experiment. She is also undercover as a student to watch over Project #002 or Kaizaki. She is very much like Ryō and is always cheerful and acts indifferent to Kaizaki's annoyance about the fact that both of them stalk him all the time. The surname comes from Onoya Station.
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
                if($postid==2){
                    ?>
                <form role="form" action="orange.php" method="post" id="reply">
       <div class="media">
                    <div class="media-body">
                         <h4 class="media-heading">
                            <?php echo $row['username']?><small id="tt"> <?php echo $row['timestamp']?></small></h4>
     <?php echo $row['comment']?><a href="relife.php?delete=<?php echo $row['ID'] ?>" id="de" onclick="return confirm('Are you sure delete this comment?')">X</a></div>
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
window.location.href='relife.php?id=2';
</script>";}}
            if($type!=1){
                   echo "<script>
alert('Only Admin allow to delete');
window.location.href='relife.php?id=2';
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
Status: Finished Airing
Aired: Jul 1, 2016
Premiered: Summer 2016
Broadcast: Fridays at 00:00 (JST)
Producers: Aniplex, Half H.P Studio, comico, Hakuhodo DY Media Partners, Lawson, C & I entertainment
Licensors: None found, add some
Studios: TMS Entertainment
Source: Web manga
Genres: Romance, School, Slice of Life
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
