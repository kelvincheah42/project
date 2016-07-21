<html>
       <?php
    include('header.php');
	?>
    <title>Arslan Senki (TV): Fuujin Ranbu</title>
       
     <!-- Page Content -->
     <body class="relife-bg">
         <font>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

             

                <!-- Title -->
                <h1>Arslan Senki (TV): Fuujin Ranbu</h1>
                 <div class=" col-md-6" >
                     <a class="video"  title="PV"  href="https://www.youtube.com/watch?v=nMvpMCbP_pQ"><img src="img/a.jpg"/></span></a>
                  
     
     
    </div>
                <!-- Preview Image -->
                <div class=" col-xs-6" >
                    <img class="img-responsive" src="img/arslan.jpg">
                </div>
                <hr>
                 <font>
                <!-- Anime Content -->
                <p class="lead">
    The story follows the exploits of Arslan, the crown prince of the fictional kingdom of Pars, which is taken over by the neighboring nation of Lusitania after his father, the king, Andragoras III, falls victim to a treacherous plot led by some of his most trusted retainers. After barely escaping with his life, Arslan rejoins his loyal servant, Daryun. Backed up by only a few more companions, including the philosopher and tactician Narsus and his young servant Elam, also Farangis, an aloof, cold priestess, and Gieve, a travelling musician and con-man, Arslan must stand against overwhelming odds to assemble an army strong enough to liberate his nation from the Lusitanian army which is led by the elusive warrior known as "Silvermask", who is later revealed to be another contender to Pars' throne.
                    </p>
                <hr>
                <h2>Main Character</h2>
                 <ul>
                <li>
                    Arslan<br>
Arslan is the prince of Pars, but is frequently misinterpreted by those around him as being a weakling, because of his effete appearance, naivete, compassion, and optimism. While these are true to a point, Arslan is also philosophical, intelligent, and charismatic, able to rally even the most apathetic of people to his cause. He is dedicated to his friends, especially Daryun, at one time threatening to kill an ally who had got Daryun into a particularly nasty situation.
                 </li>
                 <li>
                     Daryun<br>
Formerly a high-ranking military officer, Daryun is demoted from his position in the opening of the anime. His new mission is to protect and serve Arslan. Daryun and Arslan become close friends. In the style of samurai, Daryun is loyal to a fault, and at point tells Arslan that whatever his true origins may be, Daryun regards him as his prince. His fighting skills are so legendary that, at one point, Prince Rajendra praises him as the greatest warrior in both Pars and Shindra.
                 </li>
                 <li>
                     Narsus<br>
Narsus was once a chief adviser and tactician under Andragoras, but because he spoke out against the king's continuing practice of slavery, he was removed from his office. In addition to being a brilliant tactician, Narsus is also an incredible swordsman, an intelligent philosopher, and a not-so-skilled painter. He is Arslan's advisor, and Daryun's close friend.
                 </li>
                 <li>
                     Gieve<br>
Gieve is the only player who does not make a strong allegiance to any side in the various battles that take place. While he self-identifies as a musician, it would be more apt to say that Gieve is a rogue-of-all-trades. He is the most versatile fighter in the series, capable of using a sword, a bow, or a lance, and also claims that he can play any instrument in the world.

In the OVA, Gieve is also known for breaking the fourth wall: when he is alone, he will address the audience and narrate his thoughts on what is going on in the story (though it could be said that he is merely talking because he loves the sound of his own voice).
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
                if($postid==1){
                    ?>
                <form role="form" action="arslan.php" method="post" id="reply">
       <div class="media">
                    <div class="media-body">
                         <h4 class="media-heading">
                            <?php echo $row['username']?><small id="tt"> <?php echo $row['timestamp']?></small></h4>
     <?php echo $row['comment']?><a href="arslan.php?delete=<?php echo $row['ID'] ?>" id="de"  onclick="return confirm('Are you sure delete this comment?')">X</a></div>
    </div>   
                    
</form>
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
window.location.href='arslan.php?id=1';
</script>";}}
            if($type!=1){
                   echo "<script>
alert('Only Admin allow to delete');
window.location.href='arslan.php?id=1';
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
Episodes: 8
Status: Currently Airing
Aired: Jul 3, 2016 to Aug 21, 2016
Premiered: Summer 2016
Broadcast: Sundays at 17:00 (JST)
Producers: Mainichi Broadcasting System, Magic Capsule, Graphinica, NBCUniversal Entertainment
Licensors: FUNimation Entertainment
Studios: LIDENFILMS
Source: Manga
Genres: Action, Adventure, Drama, Fantasy, Historical, Supernatural
Duration: 24 min. per ep.
Rating: R - 17+ (violence & profanity)
                        </div>
                     
                    </div>
                    <!-- /.row -->
                </div>

             
                <div class="modal modal-transparent fade">
           
          <div class="ca">
             
          </div>
        </div>

            </div>

        </div>
   
        

        <!-- Footer -->
       <?php
    include('footer.php');
    
?>

    </div>
    <!-- /.container -->
    </font>
</body>

</html>
